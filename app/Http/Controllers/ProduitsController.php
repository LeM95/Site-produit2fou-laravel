<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produits;

class ProduitsController extends Controller
{
    public function index()
    {
        $produits = Produits::all();
        return view('produits', compact('produits'));
    }

    public function ajouterProduit(Request $request)
    {
        // Validation simple
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|numeric',
        ]);

        // Création du produit
        Produits::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix
        ]);

        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès !');
    }
}
