@extends('layouts.app')
@section('content')

<h1 style="font-size: 50px;margin-top:30px">Produits</h1>

@if(session('success'))
<p style="color:white;background-color:greend;padding:15px;border-radius:15px;">{{ session('success') }}</p>
@endif



<hr>

<!-- Liste des produits -->
<div class="toutproduit">
    @foreach($produits as $produit)
    <div class="fiche-produit" >
        <h3>{{ $produit->nom }}</h3>
        <img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->nom }}" style="width:200px;height:auto;">
        <p>{{ $produit->description }}</p>
        <p>Prix : {{ $produit->prix }} €</p>
    </div>
    @endforeach
</div>
<!-- Formulaire d'ajout -->
<div class="formulaireproduit">
    <form action="{{ route('produits.ajouter') }}" method="POST" style="display: flex;flex-direction:column;padding:20px 70px 200px 70px; ">
        @csrf
        <input type="text" name="nom" placeholder="Nom du produit" required>
        <input type="text" name="description" placeholder="Description">
        <input type="number" step="0.01" name="prix" placeholder="Prix" required>
        <input type="file" name="image" accept="image/*">
        <button type="submit">Ajouter produit</button>
    </form>
</div>
@endsection