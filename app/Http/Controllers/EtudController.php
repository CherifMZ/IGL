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

        $data= array('nom'=>$nom,'prenom'=>$prenom);

        $checkInsert = DB::table('etudiants')->insert($data);

    } 

    

    //lister les etudiants
    public function listeretud(){

    }
}

?>
