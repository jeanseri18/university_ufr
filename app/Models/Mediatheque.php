<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediatheque extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'type', 'fichier', 'date_ajoute'];
}
