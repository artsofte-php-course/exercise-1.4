<?php

interface GeometricObject
{
    public function getArea();

    public function getPerimeter();
}

abstract class Polygon implements GeometricObject
{
    private $sides;
}

abstract class RoundedObject implements GeometricObject
{
    private $radii;
}

class Rectangle extends Polygon
{
    private $height;
    private $width;

    public function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;
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

class Square extends Rectangle
{

    public function __construct($side)
    {
        parent::__construct($side, $side);
    }
}

class Triangle extends Polygon
{
    private $firstSide;
    private $secondSide;
    private $thirdSide;

    public function __construct($firstSide, $secondSide, $thirdSide)
    {
        $this->firstSide = $firstSide;
        $this->secondSide = $secondSide;
        $this->thirdSide = $thirdSide;
    }

    public function getArea()
    {
        return 0.5 * $this->firstSide * $this->getHeight($this->firstSide, $this->secondSide, $this->thirdSide);
    }

    public function getPerimeter()
    {
        return ($this->firstSide + $this->secondSide + $this->thirdSide);
    }

    public function getHeight($base, $secondSide, $thirdSide)
    {
        $perimeter = $this->getPerimeter();
        return 2 / $base * sqrt($perimeter * ($perimeter - $base) * ($perimeter - $secondSide) * ($perimeter - $this->thirdSide));
    }
}

class Ellipse extends RoundedObject
{

    private $smallRadius;
    private $bigRadius;

    public function __construct($bigRadius, $smallRadius)
    {
        $this->smallRadius = $smallRadius;
        $this->bigRadius = $bigRadius;
    }

    public function getArea()
    {
        return pi() * $this->smallRadius * $this->bigRadius;
    }

    public function getPerimeter()
    {
        return 2 * pi() * sqrt(($this->smallRadius ** 2 + $this->bigRadius ** 2) / 8);
    }
}


class Circle extends Ellipse
{
    public function __construct($radius)
    {
        parent::__construct($radius, $radius);
    }
}