<?php

class Employee
{

    private $nombre;
    private $salario;


    function initialize($nombre, $salario)
    {

        $this->nombre = $nombre;
        $this->salario = $salario;

        echo $this->nombre;
        echo $this->salario;
    }

    function print()
    {

        if ($this->salario > 6000) {

            $mensaje = "El usuario ha de pagar impuestos";
        } else {

            $mensaje = "El usuario no ha de pagar impuestos";
        }

        echo $mensaje;
    }
}


$Empleado1 = new Employee();
$Empleado1->initialize("Carlos", 5000);
$Empleado1->print();

$Empleado1->salario;

print_r($Empleado1);
