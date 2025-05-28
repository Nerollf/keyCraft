<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function dashboard()
    {
        // Exemple : récupérer commandes de l'utilisateur connecté
        return view('account.dashboard');
    }
}
