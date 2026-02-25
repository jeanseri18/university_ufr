<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ListeRepartition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ListeRepartitionController extends Controller
{
    //
    public function index()
    {
        $listes = ListeRepartition::orderBy('created_at', 'desc')->get();
        return view('dashboard.liste-repartition.index', compact('listes'));
    }

    public function create()
    {
        return view('dashboard.liste-repartition.create');
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'niveau_etude' => 'required|string',
            'session' => 'required|string',
            'type_page' => 'required|string',
            'file_path' => 'nullable|file|mimes:pdf,docx,doc',
            'description' => 'required|string',
        ]);

        // Gestion du fichier uploadé
        if ($request->hasFile('file_path')) {
            $pdfPath = $request->file('file_path')->store('liste-repartition', 'public');
        }

        // Création de la liste de 
        ListeRepartition::create([
            'title' => $request->title,
            'niveau_etude' => $request->niveau_etude,
            'session' => $request->session,
            'slug' => Str::slug($request->title),
            'file_path' => $pdfPath ?? null,
            'type_page' => $request->type_page,
            'file_path' => $request->file_path,
            'description' => $request->description,
        ]);

        return redirect()->route('liste-repartition.index')->with('success', 'Liste de répartition créée avec succès.');
    }

    public function edit($id)
    {
        $liste = ListeRepartition::findOrFail($id);
        return view('dashboard.liste-repartition.edit', compact('liste'));
    }

    public function update(Request $request, $id)
    {
        // Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'niveau_etude' => 'required|string',
            'session' => 'required|string',
            'type_page' => 'required|string',
            'file_path' => 'nullable|file|mimes:pdf,docx,doc',
            'description' => 'required|string',
        ]);

        // Gestion du fichier uploadé
        if ($request->hasFile('file_path')) {
            $pdfPath = $request->file('file_path')->store('liste-repartition', 'public');
        }

        // Mise à jour de la liste de répartition
        $liste = ListeRepartition::findOrFail($id);

        $liste->update([
            'title' => $request->title,
            'type_page' => $request->type_page,
            'slug' => Str::slug($request->title),
            'file_path' => $pdfPath ?? null,
            'description' => $request->description,
        ]);

        return redirect()->route('liste-repartition.index')->with('success', 'Liste de répartition mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $liste = ListeRepartition::findOrFail($id);
        $liste->delete();

        // Supprimer le fichier PDF du stockage
        if ($liste->file_path) {
            Storage::disk('public')->delete($liste->file_path);
        }

        return redirect()->route('liste-repartition.index')->with('success', 'Liste de répartition supprimée avec succès.');
    }

    public function download($id)
    {
        $liste = ListeRepartition::findOrFail($id);
        // dd($liste);

        if ($liste->file_path) {
            return response()->download(storage_path('app/public/' . $liste->file_path));
        }

        return redirect()->route('liste-repartition.index')->with('error', 'Fichier non trouvé.');
    }
}
