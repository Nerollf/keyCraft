@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Votre panier</h2>

    @if(empty($cart) || count($cart) === 0)
        <p>Votre panier est vide.</p>
        <a href="{{ route('products.index') }}" class="text-blue-600 hover:underline">Retour à la boutique</a>
    @else
        <table class="w-full bg-white rounded shadow">
            <thead>
                <tr class="border-b">
                    <th class="p-4 text-left">Produit</th>
                    <th class="p-4 text-left">Quantité</th>
                    <th class="p-4 text-left">Prix unitaire</th>
                    <th class="p-4 text-left">Total</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $id => $item)
                    @php $total += $item['price'] * $item['quantity']; @endphp
                    <tr class="border-b">
                        <td class="p-4">{{ $item['name'] }}</td>
                        <td class="p-4">{{ $item['quantity'] }}</td>
                        <td class="p-4">{{ number_format($item['price'], 2, ',', ' ') }} €</td>
                        <td class="p-4">{{ number_format($item['price'] * $item['quantity'], 2, ',', ' ') }} €</td>
                        <td class="p-4">
                            <form method="POST" action="{{ route('cart.remove', $id) }}">
                                @csrf
                                <button type="submit" class="text-red-600 hover:underline">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3" class="p-4 font-bold text-right">Total :</td>
                    <td class="p-4 font-bold">{{ number_format($total, 2, ',', ' ') }} €</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('order.checkout') }}" class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Passer à la commande</a>
    @endif
@endsection
