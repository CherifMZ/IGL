<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\EtudiantController;
use Illuminate\Http\Request;

require_once 'vendor/autoload.php';

class EnseignantTest extends TestCase
{
    
    public function test_ajout_etud() {
    
        $faker = Faker\Factory::create(); // composer require fzaninotto/faker    
        
    $request = new Request();
        $request['nom']=$faker->lastName;
        $request['prenom']=$faker->firstNameMale ;
        $request['email']=$faker->email;
        $request['date_ns']=$faker->date($format = 'Y-m-d', $max = 'now');
        $request['lieu_ns']=$faker->word;
        $request['groupe']=$faker->randomDigit;
        $request['annee']=$faker->date($format = 'Y-m-d', $max = 'now');
        $request['section']=$faker->word;
        
        $etudcontrol = new EtudiantController();
        $etud = $etudcontrol->Add($request);
        
        $this->assertDatabaseHas('utilisateur',[
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'email' => $request['email']
        ]);
        
        $this->assertDatabaseHas('etudiant',[
            'date_ns' => $request['date_ns'],
            'lieu_ns' => $request['lieu_ns'],
            'groupe' => $request['groupe'],
            'annee' => $request['annee'],
            'section' => $request['section']
        ]);
    }
    
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
© 2019 GitHub, Inc.
