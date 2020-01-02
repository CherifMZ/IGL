<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use App\Http\Controllers\EnseignentController;

require_once 'vendor/autoload.php';

///Classe EnseignantTest
///
/// contient la fonction du test unitaire d'ajout d'un enseignant
class EnseignantTest extends TestCase
{
    /** 
     * test qui verifie que l'enseignant a bien été ajouté 
     * @note il faut ajouter faker : composer require fzaninotto/faker
     * @test 
    */
    public function test_ajout_ens() {
    
        $faker = Faker\Factory::create(); // composer require fzaninotto/faker    

      $request = new Request();
        $request['nom']=$faker->lastName;
        $request['prenom']=$faker->firstNameMale ;
        $request['email']=$faker->email;
        $request['date_ns']=$faker->date($format = 'Y-m-d', $max = 'now');
        $request['date_recrt']=$faker->date($format = 'Y-m-d', $max = 'now');
        $request['grade']=$faker->word;

        $enscontrol = new EnseignentController();
        $ens = $enscontrol->add($request);

        $this->assertDatabaseHas('utilisateur',[
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'email' => $request['email']
        ]);
        
         $this->assertDatabaseHas('enseignent',[
            'date_ns' =>  $request['date_ns'],
            'date_recrt' => $request['date_recrt'],
            'grade' => $request['grade']
        ]);
    }
    
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
