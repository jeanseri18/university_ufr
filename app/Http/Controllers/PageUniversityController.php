<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageUniversityController extends Controller
{
    //

    public function quiSommesNous()
    {
        return view('university.qui-sommes-nous');
    }

    public function larecherche()
    {
        return  view('university.larecherche');
    }

    public function filierePro()
    {
        return view('university.filiere-pro');
    }

    public function filiereCla()
    {
        return view('university.filiere-classique');
    }

    public function alumnis()
    {
        return view('university.alumnis');
    }
    public function actualité()
    {
        return view('welcome');
    }
    public function partenaire()
    {
        return view('university.partenaire');
    }
    public function etudiant()
    {
        return view('university.etudiant');
    }
}
