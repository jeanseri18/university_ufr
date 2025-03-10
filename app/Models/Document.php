<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'titre', 'pdf', 'details'];

    // Optionnel : définir la table si elle est différente du nom par défaut (documents)
    // protected $table = 'documents';
}
