<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultatExamens extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'sessions',
        'type',
        'pdf',
        'niveau_etude',
        'description',
    ];
}
