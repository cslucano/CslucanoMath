<?php
namespace CslucanoMath\Tests;

use CslucanoMath\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    protected $math;

    protected function setUp(): void
    {
        $this->math = new Math();
    }

    public function testValidArgsForAdd()
    {
        $this->assertEquals(5   , $this->math->Add(1,2));
    }

    public function testValidArgsForMultiply()
    {
        $this->assertEquals(5   , $this->math->Multiply(1,2));
    }
}