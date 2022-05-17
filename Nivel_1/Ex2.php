<?php


abstract class Shape
{

    public $ancho;
    public $alto;


    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    
    public abstract function calcularArea();

} 

class Triangulo extends Shape
{

    public function calcularArea() {

        $areaTriangulo = ($this->ancho * $this->alto) /2;

        echo " El area del triangulo es " . $areaTriangulo . "<br>";


    }
}


class Rectangulo extends Shape
{


    public function calcularArea()
    {


       $areaRectangulo = $this->ancho * $this->alto;

        echo " El area del rectangulo es " . $areaRectangulo . "<br>";
    }
}



$Rectangulo1  = new Rectangulo(5, 10);

$Rectangulo1->calcularArea();


$Triangulo1 = new Triangulo(9, 7);

$Triangulo1->calcularArea();