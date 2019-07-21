<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function testExample1()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function testExample2()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testdataType(){
        $user=user::find(1);
        $this->assertIsInt($user->id);
    }
    # DB Insertion test
    public function testExample5(){
        $name="anitika";
        $email="anitik@yahoo.com";
        $password="abc";
        DB::table('users')->insert(
            ['name' => $name, 'email' => $email,'password'=> $password]
        );
        $name = DB::table('users')->where('name', 'anitika')->value('name');
        if($name == "anitika"){
            $this->assertTrue(true);

        }


    }
}
