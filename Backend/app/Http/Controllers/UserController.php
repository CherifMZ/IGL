<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
use App\FunctionUse;

/// Classe UserController.
///
/// contient la fonction de login 
class UserController extends Controller
{
     /**
     * fonction qui permetd'identifier l'utilisateur
     * @param  \Illuminate\Http\Request  $request
     * @return Response dire que l'utilisateur est connecté
     */
   public function Login(Request $Request){
        $loginvalid=FunctionUse::GetUser($Request['email'],$Request['motpass']);
        if(count($loginvalid)>0){
            $data=[
                'email' => $loginvalid[0]->email,
                'nom' => $loginvalid[0]->nom,
                'prenom' => $loginvalid[0]->prenom,
                'data_user' => $loginvalid[0]->type_utilisateur,
                'motpass' => $Request['motpass']
            ];
        }else{
            $data='';
        }
        return response([
            'status'=>'succes',
            'data'=>$data
        ],200);
        
    }
}
