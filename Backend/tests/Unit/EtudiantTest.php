<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\EtudiantController;
use Illuminate\Http\Request;
require_once 'vendor/autoload.php';

///Classe EtudiantTest
///
/// contient la fonction du test unitaire d'ajout d'un etudiant
class EtudiantTest extends TestCase
{
    /** 
     * test qui verifie que l'etudiant a bien été ajouté
     * @note il faut ajouter faker : composer require fzaninotto/faker
     * @test 
    */
    public function test_ajout_etud() {
    
        $faker = Faker\Factory::create();   
        
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
