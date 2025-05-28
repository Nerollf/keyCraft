<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout()
    {
        $cart = session()->get('cart', []);
        return view('order.checkout', compact('cart'));
    }

    public function placeOrder(Request $request)
    {
        // Ici, tu pourrais valider la commande, la stocker en base, etc.

        // Pour l'exemple, on vide le panier
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Commande passée avec succès !');
    }
}
