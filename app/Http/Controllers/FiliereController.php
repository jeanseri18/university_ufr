<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // Importer la façade DB

class FiliereController extends Controller
{
    public function ShowLicenceClassique()
    {
        // Récupérer les filières de type Licence et de catégorie classique depuis la base de données
        $filieres = DB::table('filieres')
            ->where('type', 'Licence')
            ->where('categorie', 'Filière classique')
            ->get();

        // Définir 20 images en dur
        $images = [
            'assets/licences/internationale.jpg',
            'assets/licences/developpement.jpg',
            'assets/licences/humaine.jpg',
            'assets/licences/agriculture.jpg',
            'assets/licences/managment.jpg',
            'assets/licences/finance.jpg',
            'assets/licences/gestiion.jpg',
            'assets/licences/humaine2.jpg',
            'image/7I8A9878.jpg',
            'image/7I8A9914.jpg',
            'image/7I8A9894.jpg',
            'image/7I8A9623.jpg',
            'image/7I8A9928.jpg',
            'image/licence7.jpg',
            'image/licence8.jpg',
            'image/licence9.jpg',
            'image/licence10.jpg',
            'image/licence11.jpg',
            'image/licence12.jpg',
            'image/licence13.jpg',
            'image/licence14.jpg',
            'image/licence15.jpg',
            'image/licence16.jpg',
            'image/licence17.jpg',
            'image/licence18.jpg',
            'image/licence19.jpg',
            'image/licence20.jpg'
        ];

        // Assigner les images aux filières en fonction de l'index
        foreach ($filieres as $index => $filiere) {
            if (isset($images[$index])) {
                $filiere->image = $images[$index];
            } else {
                $filiere->image = 'images/default-image.jpg'; // Image par défaut
            }
        }

        // dd($images);

        // Passer les données à la vue
        return view('university.licence-classique', compact('filieres'));
    }


    public function ShowMasterClassique()
    {
        // Récupérer les filières de type Master et de catégorie classique depuis la base de données
        $filieres = DB::table('filieres')
            ->where('type', 'Master')
            ->where('categorie', 'Filière classique')
            ->get();

        // Définir 20 images en dur
        $images = [
            'image/7I8A9751.jpg',
            'image/7I8A9878.jpg',
            'image/7I8A9914.jpg',
            'image/7I8A9894.jpg',
            'image/7I8A9623.jpg',
            'image/7I8A9928.jpg',
            'image/licence7.jpg',
            'image/licence8.jpg',
            'image/licence9.jpg',
            'image/licence10.jpg',
            'image/licence11.jpg',
            'image/licence12.jpg',
            'image/licence13.jpg',
            'image/licence14.jpg',
            'image/licence15.jpg',
            'image/licence16.jpg',
            'image/licence17.jpg',
            'image/licence18.jpg',
            'image/licence19.jpg',
            'image/licence20.jpg'
        ];

        // Assigner les images aux filières en fonction de l'index
        foreach ($filieres as $index => $filiere) {
            if (isset($images[$index])) {
                $filiere->image = $images[$index];
            } else {
                $filiere->image = 'images/default-image.jpg'; // Image par défaut
            }
        }

        // Passer les données à la vue
        return view('university.master-classique', compact('filieres'));
    }

    public function ShowDoctoratClassique()
    {
        // Récupérer les filières de type Doctorat et de catégorie classique depuis la base de données
        $filieres = DB::table('filieres')
            ->where('type', 'Doctorat')
            ->where('categorie', 'Filière classique')
            ->get();

        // Assigner les images aux filières en fonction de l'index
        foreach ($filieres as $index => $filiere) {
            if (isset($images[$index])) {
                $filiere->image = $images[$index];
            } else {
                $filiere->image = 'images/default-image.jpg'; // Image par défaut
            }
        }

        // Passer les données à la vue
        return view('university.doctorat-classique', compact('filieres'));
    }

    public function showpublic($id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('university.detail-filiere', compact('filiere'));
    }
    public function index()
    {
        $filieres = Filiere::all();
        return view('filieres.index', compact('filieres'));
    }

    public function create()
    {
        return view('filieres.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'titre' => 'required|string|max:255',
            'domaine' => 'required|string|max:255',
            'mention' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
            'duree' => 'required|integer',
            'type_parcours' => 'required|string|max:255',
            'type_formation' => 'required|string|max:255',
            'objectifs' => 'required',
            'competences' => 'required',
            'debouches' => 'required',
            'admission' => 'required',
            'contenu_formation' => 'required',
            'controle_connaissances' => 'required',
            'poursuite_etudes' => 'required',
        ]);

        Filiere::create($validated);
        return redirect()->route('filieres.index')->with('success', 'Filière ajoutée avec succès.');
    }

    public function show($id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('filieres.show', compact('filiere'));
    }

    public function edit($id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('filieres.edit', compact('filiere'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'titre' => 'required|string|max:255',
            'domaine' => 'required|string|max:255',
            'mention' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
            'duree' => 'required|integer',
            'type_parcours' => 'required|string|max:255',
            'type_formation' => 'required|string|max:255',
            'objectifs' => 'required',
            'competences' => 'required',
            'debouches' => 'required',
            'admission' => 'required',
            'contenu_formation' => 'required',
            'controle_connaissances' => 'required',
            'poursuite_etudes' => 'required',
            // Validez les autres champs ici
        ]);

        $filiere = Filiere::findOrFail($id);
        $filiere->update($validated);

        return redirect()->route('filieres.index')->with('success', 'Filière mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $filiere = Filiere::findOrFail($id);
        $filiere->delete();

        return redirect()->route('filieres.index')->with('success', 'Filière supprimée avec succès.');
    }
}
