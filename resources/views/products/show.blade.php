@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4">{{ $product->nom }}</h2>

    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nom }}">

    <p>{{ $product->description }}</p>

    <p class="mt-4 font-bold text-xl">{{ number_format($product->prix, 2, ',', ' ') }} €</p>

    <form method="POST" action="{{ route('cart.add', $product->id) }}" class="mt-6">
        @csrf
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Ajouter au panier</button>
    </form>

    <a href="{{ route('products.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Retour à la boutique</a>
@endsection
