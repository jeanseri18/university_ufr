<?php
namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    // Afficher la liste des documents
    public function index()
    {
        $documents = Document::all(); // Récupérer tous les documents
        return view('documents.index', compact('documents'));
    }

    // Afficher le formulaire pour ajouter un nouveau document
    public function create()
    {
        return view('documents.create');
    }

    // Sauvegarder le nouveau document
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'titre' => 'required',
            'pdf' => 'required|file|mimes:pdf|max:2048', // Validation pour le fichier PDF
            'details' => 'required',
        ]);

        // Sauvegarder le PDF
        $pdfPath = $request->file('pdf')->store('public/pdfs');

        // Créer un nouveau document
        Document::create([
            'type' => $request->type,
            'titre' => $request->titre,
            'pdf' => $pdfPath,
            'details' => $request->details,
        ]);

        return redirect()->route('documents.index')->with('success', 'Document ajouté avec succès!');
    }

    // Afficher les détails d'un document
    public function show($id)
    {
        $document = Document::findOrFail($id);
        return view('documents.show', compact('document'));
    }
}
