<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    protected $table = 'produits'; // si nécessaire
    protected $fillable = ['nom', 'description', 'prix'];
}