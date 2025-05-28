@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Nos Claviers</h2>

    @if($products->isEmpty())
        <p>Aucun produit disponible pour le moment.</p>
    @else
        <div class="grid grid-cols-3 gap-6">
            @foreach($products as $product)
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="font-semibold text-lg">{{ $product->nom }}</h3>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nom }}">
                    <p class="text-gray-600">{{ Str::limit($product->description, 50) }}</p>
                    <p class="mt-2 font-bold">{{ number_format($product->prix, 2, ',', ' ') }} €</p>
                    <a href="{{ route('products.show', $product->id) }}" class="mt-3 inline-block text-blue-600 hover:underline">Voir le produit</a>
                </div>
            @endforeach
        </div>
    @endif
@endsection
