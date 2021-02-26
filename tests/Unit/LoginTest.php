<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;
    private $user;

    public function setUp() : void
    {
        parent::setUp();

        $this->user = User::create([
            "name" => "Dave",
            "email" => "test@test.com",
            "password" => "hello",
        ]);
    }
    
    public function testUserLogIn()
    {
        // $userinDB = User::find(1);
        // // $this->assertSame($this->user->name, $userinDB->name);
        // // $this->assertSame($this->user->email, $userinDB->email);
        // // $this->assertSame($this->user->password, $userinDB->password);
        // dd($this->user);

        $this->assertTrue(Auth::login($this->user));

    }
}
