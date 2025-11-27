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
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'nullable|string',
        'prix' => 'required|numeric',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    // Stockage de l'image dans storage/app/public/produits
    $imagePath = $request->file('image')->store('produits', 'public');

    // Création du produit
    Produits::create([
        'nom' => $request->nom,
        'description' => $request->description,
        'prix' => $request->prix,
        'image' => $imagePath, // stocke le chemin relatif
    ]);

    return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès !');
}
}