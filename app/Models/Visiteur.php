<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    use HasFactory;

    protected $fillable = ['ip', 'created_at', 'updated_at']; // Ajout de 'ip' pour le mass assignment
}
