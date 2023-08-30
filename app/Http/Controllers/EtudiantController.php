<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;



use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    # LISTE DES ETUDIANTS

    public function liste_etudiant()
    {
        $etudiants = Etudiant::paginate(4); # paginate(4) est utilisé pour la pagination
        return view('etudiant.liste',compact('etudiants'));
    }

    #AJOUTER UN ETUDIANT

    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant -> nom = $request->nom;
        $etudiant -> prenom = $request->prenom;
        $etudiant -> classe = $request->classe;

        $etudiant -> save();
        return redirect('/ajouter')->with('status', 'Etudiant bien ajouté');
    }

    # MODIFIER UN ETUDIANT

    public function update_etudiant($id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiant.update',compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $etudiant =  Etudiant::find($request -> id);
        $etudiant -> nom = $request->nom;
        $etudiant -> prenom = $request->prenom;
        $etudiant -> classe = $request->classe;

        $etudiant -> update();
        return redirect('/etudiant')->with('status', 'Etudiant Modifié');
    }

    # SUPPRIMER UN ETUDIANT

    public function delete_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant -> delete();

        return redirect('/etudiant')->with('status', 'Etudiant  supprimé');

    }
}
