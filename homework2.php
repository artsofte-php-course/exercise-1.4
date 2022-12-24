<?php

abstract class Figure
{
    abstract public function getArea();
    abstract public function getPerimeter();
}

class Rectangle extends Figure
{
    private $width;
    private $height;
    public function __construct($width,$height) 
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return $this->width * 2 + $this->height * 2;
    }
}


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

    public function getPerimeter()
    {
        return $this->side * 4;
    }

}


class Circle extends Figure
{
    private $radius;
    public function __construct($radius) 
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return round(pi() * ($this->radius ** 2),2);
    }

    public function getPerimeter()
    {
        return round(2 * pi() * $this->radius,2);
    }
}


class Triangle extends Figure
{
    private $base;
    private $side1;
    private $side2;
    private $height;

    public function __construct($base,$side1,$side2,$height) 
    {
        $this->base = $base;
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->height = $height;
    }

    public function getArea()
    {
        return ($this->base * $this->height) / 2;
    }
    
    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->base;
    }
}
