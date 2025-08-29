<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ParlonsEco;
use Illuminate\Support\Str;

class ParlonsEcoController extends Controller
{
    public function index()
    {
        $parlonsEcos = ParlonsEco::all();
        // dd($parlonsEco);
        return view('parlons-eco.index', compact('parlonsEcos'));
    }

    public function create()
    {
        // dd('Create method called');
        return view('parlons-eco.create');
    }
    
    public function store(Request $request)
    {
        // dd($request->all());
        // Validation and storage logic goes here
        $validation = Validator::make($request->all(), [
            'titre' => 'required|string|max:255',
            'status' => 'required|in:draft,published,archived',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('images', 'public');
            $imagePath = $request->file('image')->store('public');
            // $validation['image'] = $imagePath;
        }

        dd($request->all(), $imagePath ?? null);
        
        // Create the Parlons Eco post
        ParlonsEco::create([
            'title' => $request->input('titre'),
            'slug' => Str::slug($request->input('titre')),
            'description' => $request->input('description'),
            'image' => $imagePath ?? null,
            'user_id' => auth()->id(),
            'status' => $request->input('status'), // Default status
        ]);

        // For now, just redirect back with a success message
        return redirect()->route('parlons-eco.index')->with('success', 'Poste créé avec succès!');
    }
    // /**
    //  * Display the Parlons Eco page.
    //  *
    //  * @return \Illuminate\View\View
    //  */
    // public function parlonsEco()
    // {
    //     return view('parlons-eco.index');
    // }
}
