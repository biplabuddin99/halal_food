<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cartPage()
    {
        $carts=Cart::content();
        $total_price=Cart::subtotal();
        // return $carts;
        return view('product.cart',compact('carts','total_price'));
    }

    public function addToCart(Request $request)
    {
        // dd($request->all());
        $id = $request->product_id;
        $order_qty = $request->order_qty;
        $product=DB::table('db_items')->where('id',$id)->first();
        Cart::add([
            'id'=>$product->id,
            'name'=>$product->item_name,
            'price'=>$product->sales_price,
            'weight'=>0,
            'product_stock'=>$product->stock,
            'qty'=>$order_qty,
            'options'=>[
                'product_image' => $product->item_image
            ]
        ]);
        return back();

    }
    /*======= removeFromCart =======*/
    public function removeFromCart($cart_id)
    {
        Cart::remove($cart_id);
        // Toastr::info('Product Removed from Cart!!');
        return back();
    }

}
