<?php
namespace Src;

use PHPUnit\Framework\TestCase;

class AtypicalUniqueCharsClassTest extends TestCase 
{   
    public string $string = 'four';
    public function testFailure1()
    {
        $uniqChar = new UniqueChars();
        $this->assertNotEmpty($uniqChar->CountUniqueChars($this->string));
    }

    public function testFailure2()
    {
        $uniqChar = new UniqueChars();
        $this->assertDoesNotMatchRegularExpression('~[0-9]+~', $uniqChar->CountUniqueChars($this->string));
    }
}