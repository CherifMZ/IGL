<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    
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
