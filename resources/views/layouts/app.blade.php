<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Claviers Custom</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow p-4 flex justify-between">
    <div>
        <a href="{{ route('home') }}" class="font-bold text-xl">Claviers Custom</a>
    </div>
    <div class="space-x-4">
        <a href="{{ route('products.index') }}" class="hover:underline">Boutique</a>
        <a href="{{ route('cart.index') }}" class="hover:underline">Panier</a>
        @auth
            <a href="{{ route('account.dashboard') }}" class="hover:underline">Mon compte</a>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="hover:underline">Déconnexion</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="hover:underline">Connexion</a>
            <a href="{{ route('register') }}" class="hover:underline">Inscription</a>
        @endauth
    </div>
</nav>

<main class="container mx-auto mt-6 px-4">
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 mb-6 rounded">{{ session('success') }}</div>
    @endif

    @yield('content')
</main>

</body>
</html>
