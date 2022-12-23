<?php
require_once "Figure.php";
class Triangle extends Figure
{
    private $side1;
    private $side2;
    private $side3;

    public function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function getArea()
    {
        $p = $this->getPerimetr() / 2;
        return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3));
    }

    public function getPerimetr()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
}