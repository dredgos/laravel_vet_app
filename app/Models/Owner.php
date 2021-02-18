<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'telephone', 'email', 'address_1', 'address_2', 'town', 'postcode'];

    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function fullAddress()
    {
        // Where fields are optional then we might need to consider how we would want these output so we dont just get an empy field.
        return "{$this->address_1}, {$this->address_2}, {$this->town}, {$this->postcode}"; 
    }

    public function formattedPhoneNumber()
    {
        $partOne = Str::of($this->telephone)->substr(0, 4);
        $partTwo = Str::of($this->telephone)->substr(4, 3);
        $partThree = Str::of($this->telephone)->substr(7, 4);
        return "{$partOne} {$partTwo} {$partThree}";
    }

    public static function haveWeBananas($number)
    {
        if ($number === 0) {
            return "No we have no bananas";
        } 

        if ($number === 1) {    
            return "Yes we have {$number} banana";
        }

        return "Yes we have {$number} bananas";
    }

    public static function doesEmailExist($email)
    {
        //Owner where email === email using exists method

    }
}
