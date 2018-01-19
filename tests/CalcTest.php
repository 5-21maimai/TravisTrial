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
    
    public function testDiv()
    {
	$calc = new Calc();
	$this->assertEquals($calc->div(6,2),3);

    }

    public function testErrorDiv()
    {
	$calc = new Calc();
	$this->assertEquals($calc->div(6,0),"エラー");
    }
    
    public function testIndex()
    {
	$calc = new Calc();
	$this->assertEquals($calc->index(5),25);
    }
}
?>