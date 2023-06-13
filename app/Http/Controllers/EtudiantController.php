<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    //Fonction pour afficher la liste des etudiants
    public function listeEtudiant(){
        $etudiants = Etudiant::paginate(5);
        return view('etudiant.liste', compact('etudiants'));
    }
    //Fonction pour afficher le formulaiter pour ajouter des étudiants
    public function ajouterEtudiant(){
        return view('etudiant.ajouter');
    }

    //Fonction pour effectuer des traitement lors du ckic sur le bouton du formulaire
    public function ajouterEtudiantTraitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenoms'=>'required',
            'classe'=>'required',
        ]);
        //Instanciation de la classe etudiant
        $etudiant = new Etudiant();
        $etudiant->nom=$request->nom;
        $etudiant->prenoms=$request->prenoms;
        $etudiant->classe=$request->classe;
        //Utilisation de la methode save() pour effectur notre enregistrement
        $etudiant->save();
        //Redirection vers la page ajouter etudiant sinon on risque d'etre bloquer sur une page blanche
        return redirect('/ajouter')->with("status","L' étudiant a bien été ajouter avec succes.");
        

    }

    //Creation de la methode pour modifier 
    public function updateEtudiant($id){
        $etudiants=Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }

    //Modification des données

    public function modifierEtudiantTraitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenoms'=>'required',
            'classe'=>'required',
        ]);

        $etudiant=Etudiant::find($request->id);
        $etudiant->nom=$request->nom;
        $etudiant->prenoms=$request->prenoms;
        $etudiant->classe=$request->classe;
        $etudiant->update();

        return redirect('/etudiant')->with("status", "Modification effectuée avec succes");

    }

    public function delEtudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with("status","L' étudiant a été supprimer");
    }

    
}
