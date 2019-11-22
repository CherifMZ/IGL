<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class EtudController extends Controller
{
    //ajouter des etudiants
    public function ajouteretud(Request $req){
        
        $nom=$req->input('nom');
        $prenom=$req->input('prenom');
        $email=$req->input('email');
        $password=$req->input('password');


        $data= array('nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'password'=>$password);

        $checkInsert = DB::table('etudiants')->insert($data);

        if (count($checkInsert)>0) {
            echo "etudiant a été ajouté";
        } else {
            echo "etudiant n'a pas été ajouté";
        }

    } 

    //lister les etudiants
    public function listeretud(){

    }
}

?>
