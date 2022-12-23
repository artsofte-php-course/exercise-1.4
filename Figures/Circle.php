<?php
require_once "Figure.php";
class Circle extends Figure
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getPerimetr()
    {
        return 2 * pi() * $this->radius;
    }

    public function getArea()
    {
        return pi() * $this->radius ** 2;
    }
}
