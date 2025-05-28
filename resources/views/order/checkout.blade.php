@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Finaliser la commande</h2>

    @if(empty($cart) || count($cart) === 0)
        <p>Votre panier est vide.</p>
        <a href="{{ route('products.index') }}" class="text-blue-600 hover:underline">Retour à la boutique</a>
    @else
        <form method="POST" action="{{ route('order.place') }}" class="space-y-4 max-w-lg">
            @csrf

            <div>
                <label for="name" class="block font-semibold mb-1">Nom complet</label>
                <input type="text" name="name" id="name" required class="w-full border p-2 rounded" />
            </div>

            <div>
                <label for="address" class="block font-semibold mb-1">Adresse de livraison</label>
                <textarea name="address" id="address" required class="w-full border p-2 rounded"></textarea>
            </div>

            <div>
                <label for="payment" class="block font-semibold mb-1">Mode de paiement</label>
                <select name="payment" id="payment" required class="w-full border p-2 rounded">
                    <option value="card">Carte bancaire</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank">Virement bancaire</option>
                </select>
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Valider la commande</button>
        </form>
    @endif
@endsection
