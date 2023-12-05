<?php
namespace Src;

use PHPUnit\Framework\TestCase;

class UniqueCharsClassTest extends TestCase 
{
    public string $string = 'four';

    public function testCountUniqueChars()
    {   
        $uniqChar = new UniqueChars();
        $this->assertEquals(4, $uniqChar->CountUniqueChars($this->string));
    }

    public function testCountUniqueChar2()
    {
        $uniqChar = new UniqueChars();
        $uniqChar->CountUniqueChars($this->string);
        $this->assertEquals(4, $uniqChar::$cache[$this->string]);
    }
}