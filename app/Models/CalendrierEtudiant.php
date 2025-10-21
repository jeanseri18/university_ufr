<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendrierEtudiant extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'emploi_du_temps', 'image', 'classe', 'session'];
}
