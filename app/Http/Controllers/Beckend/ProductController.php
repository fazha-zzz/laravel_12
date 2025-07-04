<?php

namespace App\Http\Controllers\Beckend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Storage;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $product = Product::latest()->get();

        $title = 'hapus Detail';
        $text = "apakah anda yakin?";
        confirmDelete($title, $text);

        return view('backend.Product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
         return view('backend.Product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated  = $request->validate([
            'name'        => 'required|unique:categories',
            'category_id' => 'required',
            'price'       => 'required|numeric',
            'description' => 'required',
            'stock'        => 'required|numeric',
            'image'       => 'required|image|mimes:jpg,png',
        ]);

        $product = new product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;

        //upload gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomName = Str::random(20)  . '.'. $file->getClientOriginalExtension();
            $path = $file->storeAs('product', $randomName, 'public');
            //memasukan nama ke image ke database
            $product->image = $path;
        }
        
        $product->save();
        toast('data berhasil disimpan', 'success');
        return redirect()->route('backend.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $product = Product::findOrFail($id);
         return view('backend.Product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $product = Product::findOrFail($id);
         $category = Category::all();
         return view('backend.Product.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //  $validated  = $request->validate([
        //     'name' => 'required|unique:categories',
        //     'category_id' => 'required',
        //     'price' => 'required|numeric',
        //     'description' => 'required',
        //     'stock' => 'required|numeric',
           
        // ]);

        $product = new product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;

        //upload gambar
        if ($request->hasFile('image')) {
            !is_null($product->image) && Storage::delete($product->image);

            $file = $request->file('image');
            $randomName = Str::random(20)  . '.'. $file->getClientOriginalExtension();
            $path = $file->storeAs('product', $randomName, 'public');
            //memasukan nama ke image ke database
            $product->image = $path;
        }
        $product->save();
        toast('data berhasil disimpan', 'success');
        return redirect()->route('backend.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $product = product::findOrFail($id);
         Storage::disk('public')->delete($product->image);
         $product->delete();
        toast('data berhasil dihapus', 'success');
        return redirect()->route('backend.product.index');
    }
}
