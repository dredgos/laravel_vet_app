<?php

namespace App;

class Cracker
{


    public function decrypt($message)
    {   
        $table = array("!" => "a", ")" => "b", "#" => "c", "(" => "d", "." => "e", "*" => "f", "%" => "g", "&" => "h", ">" => "i", "<" => "j", "@" => "k", "a" => "l", "b" => "m", "c" => "n", "d" => "o", "e" => "p", "f" => "q", "g" => "r", "h" => "s", "i" => "t", "j" => "u", "k" => "v", "l" => "w", "m" => "x", "n" => "y", "o" => "z");

        return strtr($message, $table);

    }
}

// private $dictionary = [
//     "!" => "a",
//     ")" => "b",
//     "#" => "c",
//     "(" => "d",
//     "." => "e",
//     "*" => "f",
//     "%" => "g",
//     "&" => "h",
//     ">" => "i",
//     "<" => "j",
//     "@" => "k",
//     "a" => "l",
//     "b" => "m",
//     "c" => "n",
//     "d" => "o",
//     "e" => "p",
//     "f" => "q",
//     "g" => "r",
//     "h" => "s",
//     "i" => "t",
//     "j" => "u",
//     "k" => "v",
//     "l" => "w",
//     "m" => "x",
//     "n" => "y",
//     "o" => "z",
//     " " => " ",
// ];
// public function decrypt($message)
// {
//     $decryptedMessage = "";
    
//     $collection = collect(str_split($message));
//     foreach ($collection as $letter) {
//         foreach ($this->dictionary as $key => $value) {
//             if ($letter === $key) {
//                 $decryptedMessage .= $value;
//             }
//         }
//     }
//     return $decryptedMessage;
// }

