<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/// Classe EtudiantController.
///
/// Contient la fonction qui ajoute un etudiant
class EtudiantController extends Controller
{
    /** 
     * fonction qui permet d'ajouter un etudiant
     * @param  \Illuminate\Http\Request  $request
     * @return Response dire que l'etudiantt a bien été ajouté 
     */
    public function Add(Request $request)
    {
        Utilisateur::insert([
            'nom'=>$request['nom'],
            'prenom'=>$request['prenom'],
            'email'=>$request['email_etud'],
            'motpass'=>sha1($request['email_etud']),
            'type_utilisateur'=>'d'
        ]);
        $useretud=Utilisateur::whereEmailAndMotpass($request['email_etud'],sha1($request['email_etud']))->get();
        Etudiant::insert([
            'date_ns'=>$request['date_ns'],
            'lieu_ns'=>$request['lieu_ns'],
            'groupe'=>$request['groupe'],
            'annee'=>$request['annee'],
            'section'=>$request['section'],
            'utilisateur_idutilisateur'=>$useretud[0]->idutilisateur
        ]);
        return response([
            'status'=>'succus',
            'data'=>"etudiant ajouté"
        ]);
        
    }
}
