<?php

namespace App\Http\Controllers;

use App\Enseignent;
use App\Utilisateur;
use Illuminate\Http\Request;

class EnseignentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $userens=new Utilisateur;
        Utilisateur::insert([
            'nom'=>$request['nom'],
            'prenom'=>$request['prenom'],
            'email'=>$request['email_ens'],
            'motpass'=>sha1($request['email_ens']),
            'type_utilisateur'=>'n'
        ]);
        $userens=Utilisateur::whereEmailAndMotpass($request['email_ens'],sha1($request['email_ens']))->get();
        Enseignent::insert([
            'date_ns'=>$request['date_ns'],
            'date_recrt'=>$request['date_recrt'],
            'grade'=>$request['grade'],
            'utilisateur_idutilisateur'=>$userens[0]->idutilisateur
        ]);
        return response([
            'status'=>'succus',
            'data'=>"l'ensiegnant et bien inscrire"
        ]);
    }
    
}
