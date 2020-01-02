<?php

namespace App;

use Illuminate\Http\Request;
use App\Utilisateur;

class FunctionUse
{
    public static function GetUser($email,$motpass){
        $user=new Utilisateur;
        $user=Utilisateur::whereEmailAndMotpass($email,sha1($motpass))->get();
        return $user;
    }
}
