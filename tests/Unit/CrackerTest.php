<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Cracker;

class CrackerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

        public function testA()
    {
        $cracker = new Cracker("!");
        $this->assertSame("a", $cracker->decrypt("!"));
    }

    public function testB()
    {
        $cracker = new Cracker(")");
        $this->assertSame("b", $cracker->decrypt(")"));
    }

    public function testC()
    {
        $cracker = new Cracker("#");
        $this->assertSame("c", $cracker->decrypt("#"));
    }

    public function testD()
    {
        $cracker = new Cracker("(");
        $this->assertSame("d", $cracker->decrypt("("));
    }

    public function testAB()
    {
        $cracker = new Cracker("!)");
        $this->assertSame("ab", $cracker->decrypt("!)"));
    }

    public function testABC()
    {
        $cracker = new Cracker("!)#");
        $this->assertSame("abc", $cracker->decrypt("!)#"));
    }








    public function testFull()
    {
        $cracker = new Cracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o");
        $this->assertSame("hello mum", $cracker->decrypt("&.aad bjb"));
    }
}
