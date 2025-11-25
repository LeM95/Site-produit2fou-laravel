
@extends('layouts.app')
@section('content')

<h1>Produits</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<!-- Formulaire d'ajout -->
<form action="{{ route('produits.ajouter') }}" method="POST" style="display: flex; ">
    @csrf
    <input type="text" name="nom" placeholder="Nom du produit" required>
    <input type="text" name="description" placeholder="Description">
    <input type="number" step="0.01" name="prix" placeholder="Prix" required>
    <button type="submit">Ajouter produit</button>
</form>

<hr>

<!-- Liste des produits -->
@foreach($produits as $produit)
    <div style="border:1px solid #ccc; padding:10px; margin:10px" class="content">
        <h3>{{ $produit->nom }}</h3>
        <p>{{ $produit->description }}</p>
        <p>Prix : {{ $produit->prix }} €</p>
    </div>
@endforeach
@endsection


