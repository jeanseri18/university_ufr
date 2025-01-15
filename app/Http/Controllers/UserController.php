<?php



namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Afficher la liste des utilisateurs
    public function index()
    {
        $users = User::all();  // Récupérer tous les utilisateurs
        return view('users.index', compact('users')); // Passer la variable $users à la vue
    }

    // Afficher le formulaire pour créer un utilisateur
    public function create()
    {
        return view('users.create'); // Retourner la vue de création d'utilisateur
    }

    // Enregistrer un nouvel utilisateur
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'classe' => $request->classe,
            'filiere' => $request->filiere,
        ]);

        return redirect()->route('users.index')->with('success', 'Utilisateur créé avec succès!');
    }
}
