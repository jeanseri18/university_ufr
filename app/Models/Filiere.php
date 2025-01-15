<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = [
    'type','categorie',    'titre', 'domaine', 'mention', 'specialite', 'grade', 'duree',
        'type_parcours', 'type_formation', 'objectifs', 'competences',
        'debouches', 'admission', 'contenu_formation', 'controle_connaissances', 'poursuite_etudes'
    ];
    
}
