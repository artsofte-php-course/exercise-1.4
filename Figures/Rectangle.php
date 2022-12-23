<?php
require_once "Figure.php";
class Rectangle extends Figure
{
    private $height;
    private $width;

    public function __construct($width, $height)
    {
        $this->$height = $height;
        $this->$width = $width;
    }
    public function getArea()
    {
        return $this->height * $this->width;
    }

    public function getPerimetr()
    {
        return 2 * ($this->width + $this->height);
    }
}