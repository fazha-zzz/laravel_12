<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;



class CartController extends Controller
{
   
    public function index()
    {
        $cartItem = Cart::with('product')->where('user_id', auth()->id())->get();
        return view('cart', compact('cartItem'));
    }

   

   
    public function addToCart(Request $request, $id)
    {
        if (! Auth::check()) {
            //jika belum login, redirect dengan alert
            toast('Silahkan login terlebih dahulu untuk menambahkan ke keranjang.', 'error');
            return redirect('/login');
        }

        $request->validate([
            'qty' => 'required|integer|min:1',
        ]);

        $cart =  Cart::where('user_id', Auth::id())
        ->where('product_id', $id)
        ->first();

        if ($cart) {
            $cart->increment('qty', $request->qty);
        }else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $id,
                'qty' => $request->qty,
            ]);
        }
        toast('Produck berhasil ditambahkan ke keranjang.', 'succes');
            return back();
    }

   
    public function updateCart(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);

        $request->validate([
            'qty' => 'required|integer|min:1|max:' . $cartItem->product->stock,
        ]);

        $cartItem->qty = $request->qty;
        $cartItem->save();

        toast('jumlah berhasil diperbarui.', 'succes');
        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function remove($id)
    {
        $cart = Cart::where('id',$id)->where('user_id', auth()->id())->firstOrFail();
        $cart->delete();
        toast('jumlah berhasil diperbarui.', 'succes');
        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        $cartItem = Cart::with('product')->where('user_id', auth()->id())->get();
        if ($cartItem->isEmpty()) {
             toast('keranjang kosong. tidak bisa checkout.', 'warning');
             return redirect()->route('cart.index');
        };
        //hitung order
        $total =$cartItem->sum(function($item) {
            return $item->qty * $item->product->price;
        });
        //simpan order
        $order = Order::create([
            'user_id' =>auth()->id(),
            'order_code' =>'ORD-' . strtoupper(str::random(8)),
            'total_price' =>$total,
            'status' =>'pending',
        ]);

        //simpan detail order ke privot 'order_product'
        foreach ($cartItem as $item) {
            //kurangi stok
            $product = Product::find($item->product_id);
            $product->stock = $item->qty;
            $product->save();

            $order->product()->attach($item->product_id, [
                'qty' => $item->qty,
                'price' => $item->product->price,
            ]);
        }

        //hapus isi keranjang
        Cart::where('user_id', auth()->id())->delete();

         toast('pesanan berhasil dibuat.', 'succes');
        return redirect()->route('orders.index');

    }
}
