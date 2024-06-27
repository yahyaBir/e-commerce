<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartView(){

        $cartItem = session('cart',[]);
        $totalPrice = 0;

        foreach ($cartItem as $cart){
            $totalPrice += $cart['price']*$cart['quantity'];
        }

        return view('cart', compact('cartItem','totalPrice'));
    }
    public function cartAdd(Request $request){

        $productID=$request->id;
        $quantity= $request->quantity;
        $urun = Product::find($productID);

        $cartItem = session('cart',[]);

        if (array_key_exists($productID,$cartItem)){
            $cartItem[$productID]['quantity'] += $quantity;

        }else{
            $cartItem[$productID]=[
                'image'=>$urun->image,
                'name'=>$urun->name,
                'price'=>$urun->price,
                'quantity'=>$quantity,
            ];
        }
        session(['cart'=>$cartItem]);

        return back()->withSuccess('Ürün sepete eklendi.');
    }

    public function cartRemove(Request $request){
        $productID = $request->product_id;
        $cartItem = session('cart',[]);
        if (array_key_exists($productID,$cartItem)) {
            unset($cartItem[$productID]);
        }
        session(['cart'=>$cartItem]);
        return back()->withSuccess('Ürün başarıyla kaldırıldı.');
    }
}
