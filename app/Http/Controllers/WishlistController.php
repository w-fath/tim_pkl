<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class WishlistController extends Controller
{
    public function getWishlistProducts()
    {
        $items = Cart::instance("wishlist")->content();
        return view('wishlist',['items'=>$items]);
    }
    
    public function addProductToWishlist(Request $request)
    {
        Cart::instance("wishlist")->add($request->id,$request->name,1,$request->price)->associate('App\Models\Product');
        return response()->json(['status' => 200, 'message'=>'Succsess ! Produk telah ditambahkan ke Wishlist.']);
    }

}