<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller
{

     private $arr = [
            ['id'=>1, 'nama'=>'faza','kelas'=>'xii rpl 1'],
            ['id'=>2, 'nama'=>'faza','kelas'=>'xii rpl 1'],
            ['id'=>3, 'nama'=>'faza','kelas'=>'xii rpl 1'],
        ];

    public function index() //memberikan daftar data
    {
        $siswa = session('siswa_data' , $this->arr);
        return view('siswa.index',['siswa' => $siswa]);
    }

    public function show($id)
    {

        //ambil data dari sesstion
        $data = session('siswa_data', $this->arr);

        //collect membuat data cadi array
        //firstWhere mencocokan data
        $siswa = collect($data)->firstWhere('id', $id);
        // dd($siswa);                 


        return view('siswa.show',['siswa' => $siswa]);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        //ambil data siswa dari session
        $siswa = session('siswa_data', $this->arr);

        //membuat id otomatis
        $newId= collect($siswa)->max('id') + 1;

        $siswa[] = [
            'id' => $newId,
            'kelas' => $request->kelas,
            'nama' => $request->nama,
            
        ];
      
        //simpan ke array siswa
        session(['siswa_data' => $siswa]);
        
        //kembali ke halaman siswa
        return redirect('siswa.index');


    }

     public function edit($id)
    {

        //ambil data dari sesstion
        $data = session('siswa_data', $this->arr);

        //collect membuat data cadi array
        //firstWhere mencocokan data
        $siswa = collect($data)->firstWhere('id', $id);
        // dd($siswa);                 
        if (! $siswa) {
            abort(404);
        }

        return view('siswa.edit',compact('siswa'));
    }

    public function update(Request $request, $id){
        $data = session('siswa_data', $this->arr);

        //mengambil data siswa berdasarkan id
    //    foreach ($data as &$item) {
    //     if ($item['id'] == $id) {

    //          $item['nama']= $request->nama;
    //          $item['kelas']= $request->kelas;
    //          break;
    //     }
    //    }
       
    $siswaId = Collect($data)->search(fn($item)=>
    $item['id'] == $id);
       
        $data[$siswaId]['nama']= $request->nama;
        $data[$siswaId]['kelas']= $request->kelas;

        session(['siswa_data'=> $data]);
        return redirect('siswa');
    }

    public function destroy($id){

        $siswa = session('siswa_data', $this->arr);
        //mencari array yang sama dari colum id
        $index = array_search($id,array_column($siswa,'id'));

        //hapus data berdasarkan id dari index arraynya
        array_splice($siswa, $index, 1);
        
        session(['siswa_data'=> $siswa]);

        return redirect('siswa');


    }
}
