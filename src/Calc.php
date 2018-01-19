<?php

namespace Sample;

class Calc {
    function add($a, $b) {
        return $a + $b;
    }

    function sub($a, $b) {
        return $a - $b;
    }

    function mul($a, $b) {
    	return $a * $b;
    }

    function div($a, $b)
    {
	if($b === 0) {
	    return "エラー";
	}
	return $a / $b;
    }

    function index($a)
    {
	return $a * $a;
    }
}
