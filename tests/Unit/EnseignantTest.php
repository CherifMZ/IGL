<?php

namespace Tests\Unit;

require_once 'vendor/autoload.php';

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EnseignantTest extends TestCase
{
    
    public function test_ajout_etud() {
    
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
        
    }
    
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
