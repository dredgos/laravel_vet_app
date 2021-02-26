<?php

namespace App;

class FizzBuzz
{
    public function forNumber($num)
    {   
        $result = "";

        if ($num % 3 === 0) {
            $result .= "Fizz";
        }

        if ($num % 5 === 0) {
            $result .= "Buzz";
        }

        if ($num % 7 === 0) {
            $result .= "Rarr";
        }

        if ($result === "") {
            $result .= $num;
        }

        return $result;
        
    }
}

