<?php
namespace App;

class Arithmetic
{

    public function add($x, $y)
    {
        return ($x+$y);
    }
    public function subtract($x, $y)
    {
        return ($x-$y);
    }
    public function multiply($x, $y)
    {
        return ($x*$y);
    }
    public function divide($x, $y)
    {
        return ($x/$y);
    }
    public function power($x, $y)
    {
        return ($x ** $y);
    }
}
