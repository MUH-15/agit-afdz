<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }
}