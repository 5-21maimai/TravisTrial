<?php

use PHPUnit\Framework\TestCase;
use Sample\Calc;

class CalcTest extends TestCase
{
    public function testAdd()
    {
	$calc = new Calc();
	$this->assertEquals($calc->add(1,2), 3);
    }

    public function testSub()
    {
	$calc = new Calc();
	$this->assertEquals($calc->sub(3,2), 1);

    }

    public function testMul()
    {
	$calc = new Calc();
	$this->assertEquals($calc->mul(3,2),6);
    }
}
?>