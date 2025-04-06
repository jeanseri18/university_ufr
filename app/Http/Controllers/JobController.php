<?php



namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Lister les jobs
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    // Afficher le formulaire d'ajout
    public function create()
    {
        return view('jobs.create');
    }

    // Ajouter un nouveau job
    public function store(Request $request)
    {
        $request->validate([
            'entreprise' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'image' => 'nullable|image|max:10048', // 2MB max
            'detail' => 'nullable|string',
            'foruser' => 'nullable|string',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('jobs', 'public') : null;

        Job::create([
            'entreprise' => $request->entreprise,
            'poste' => $request->poste,
            'image' => $imagePath,
            'detail' => $request->detail,
            'foruser' => $request->foruser,
        ]);

        return redirect()->route('jobs.index')->with('success', 'Job ajouté avec succès.');
    }

    // Supprimer un job
    public function destroy($id)
    {
        $job = Job::findOrFail($id);

        // Supprimer les fichiers associés si présents
        if ($job->image) {
            \Storage::disk('public')->delete($job->image);
        }

        $job->delete();

        return redirect()->route('jobs.index')->with('success', 'Job supprimé avec succès.');
    }
}
