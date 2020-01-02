<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

///Classe UsertTest
///
/// contient la fonction du test unitaire du login
class UserTest extends TestCase
{
    /** 
     * test qui verifie que l'utilisateur est l'admin 
     * @test 
    */
    public function testUser() {
      $this->assertDatabaseHas('utilisateur',[
          'nom' => "admin",
          'prenom' => "admin",
          'email' => "space_admin@esi.dz"
      ]);
    
    }
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
