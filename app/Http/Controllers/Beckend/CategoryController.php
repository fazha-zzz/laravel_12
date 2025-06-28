<?php

namespace App\Http\Controllers\Beckend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $category = Category::latest()->get();

         $title = 'hapus data!';
         $text = "apakah anda yakin?";
         confirmDelete($title,$text);

         return view('backend.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //volidasi
        $validated  = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();
        toast('data berhasil disimpan', 'success');
        return redirect()->route('backend.category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compoct('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validated  = $request->validate([
            'name' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = st::slug($request->name, '-');
        $category->save();
        toast('data berhasil di edit', 'success');
        return redirect()->route('backend.category.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $category = Category::findOrFail($id);
         $category->delete();
        toast('data berhasil dihapus', 'success');
        return redirect()->route('backend.category.index');
    }
}
