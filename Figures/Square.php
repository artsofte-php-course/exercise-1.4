<?php
require_once "Figure.php";
class Square extends Figure
{
    private $side;
    public function __construct($side)
    {
        $this->side = $side;
    }
    public function getArea()
    {
        return $this->side ** 2;
    }

    public function getPerimetr()
    {
        return $this->side * 4;
    }
}