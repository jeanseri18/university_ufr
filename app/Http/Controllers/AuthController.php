<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Afficher la page de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Gérer la soumission du formulaire de connexion
    public function login(Request $request)
    {
        // Validation des données
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tentative de connexion de l'utilisateur
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Les identifiants fournis sont incorrects.']);
    }

    // Déconnexion de l'utilisateur
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // Afficher le formulaire de modification du mot de passe
    public function showChangePasswordForm()
    {
        return view('auth.change-password');
    }

    // Gérer la mise à jour du mot de passe
    public function changePassword(Request $request)
    {
        // Validation des données
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        // Vérifier si le mot de passe actuel est correct
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect.']);
        }

        // Mise à jour du mot de passe
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('home')->with('status', 'Mot de passe mis à jour avec succès!');
    }
}
