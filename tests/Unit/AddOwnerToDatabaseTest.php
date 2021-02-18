<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Owner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AddOwnertoDBTest extends TestCase
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

        $this->owner = new Owner([
            "first_name" => "Brad",
            "last_name" => "Dolittle",
            "telephone" => "09754845612",
            "email" => "dolittle@everyday.com",
            "address_1" => "6 Canal Road",
            "address_2" => "The Wharf",
            "town" => "Bristol",
            "postcode" => "BS7 4DD",
        ]);
    }
    
    public function testAddOwnerToTestDB()
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

        $ownerFromDB = Owner::first();

        $this->assertSame($this->owner->fullName(), $ownerFromDB->fullName());
        $this->assertSame($this->owner->fullAddress(), $ownerFromDB->fullAddress());
        $this->assertSame($this->owner->email, $ownerFromDB->email);
        $this->assertSame($this->owner->telephone, $ownerFromDB->telephone);
    }
}
