<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Owner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerWithEmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;
    private $owner;

    public function setUp() : void
    {
        parent::setUp();

    }


    public function testOwnerWithEmail()
    {
        Owner::create([
            "first_name" => "Brad",
            "last_name" => "Dolittle",
            "telephone" => "09754845612",
            "email" => "dolittle@everyday.com",
            "address_1" => "6 Canal Road",
            "address_2" => "The Wharf",
            "town" => "Bristol",
            "postcode" => "BS7 4DD",
        ]);
        
        $this->assertTrue(Owner::ownerWithEmailExists("dolittle@everyday.com"));
        $this->assertFalse(Owner::ownerWithEmailExists("email@somemeial.com"));
    }
}
