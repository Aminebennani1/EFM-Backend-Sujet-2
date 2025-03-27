<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index()
    {
        $Livres = Livre::paginate(10);
        return view('Livres.index', compact('Livres'));
    }

    public function create()
    {
        return view('Livres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'nombre_pages' => 'required',
            'categorie' => 'required',
        ]);

        Livre::create($request->all());
        return redirect()->route('Livres.index');
    }

    public function show(Livre $Livre)
    {
        return view('Livres.show', compact('Livre'));
    }

    public function update(Request $request, Livre $Livre)
    {
        $request->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'nombre_pages' => 'required',
            'categorie' => 'required',
        ]);

        $Livre->update($request->all());
        return redirect()->route('Livres.index')->with('success', 'Livre updated successfully.');
    }

  
}
