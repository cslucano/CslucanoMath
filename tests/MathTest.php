<?php
namespace CslucanoMath\Tests;

use CslucanoMath\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testValidArgsForSum()
    {
        $math = new Math();
        $this->assertEquals(3, $math->Sum(1,2));
    }
}