<?php

namespace App\Http\Controllers;

use App\Models\Livres;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function getAll()
    {
        $titre = 'Titre du Livre';
        $livres = Livres::with('auteur')->get();

        return view('livres', ['livres' => $livres, 'titre' => $titre]);

    }
    public function get(Request $request, $id)
    {
        $livre = Livres::find($id);
        return view('livre', ['livre' => $livre]);
    }
}
