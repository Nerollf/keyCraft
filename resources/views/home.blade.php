@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Bienvenue sur Claviers Custom !</h1>
    <p>Découvrez nos claviers personnalisés de qualité.</p>
    <a href="{{ route('products.index') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Voir la boutique</a>
@endsection
