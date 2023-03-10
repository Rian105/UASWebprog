<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\App;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        $ListItems = $request->$id;
        $quantity = 1;

        Cart::add([
            'id' => $request->id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function CartShow(Product $Number,$lang){
        App::setlocale($lang);
        return view('CartPage',[
            "Detail" => $Number
        ]);
    }

    public function CartShowAdmin(Product $Number,$lang){
        App::setlocale($lang);
        return view('CartPageAdmin',[
            "Detail" => $Number
        ]);
    }
    

}
