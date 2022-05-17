<?php

class PokerDice
{

    public $arrayFiguras = array("As", "K", "Q", "J", "7", "8");

    public function throw()
    {

        $valorAleatorio = rand(0, 5);

        return $valorAleatorio;
    }

    public function shapeName()
    {

        switch ($this->throw()) {

            case 0:
                $caraDado = $this->arrayFiguras[0];
                break;

            case 1:
                $caraDado = $this->arrayFiguras[1];
                break;

            case 2:
                $caraDado = $this->arrayFiguras[2];
                break;

            case 3:
                $caraDado = $this->arrayFiguras[3];
                break;

            case 4:
                $caraDado = $this->arrayFiguras[4];
                break;

            case 5:
                $caraDado = $this->arrayFiguras[5];
                break;
        }

        echo "En la ultima tirada, la figura obtenida es la " . $caraDado;
    }
}


function ThrownSameTime($throwns = 5)
{

    $arrayPokerDice = array();

    for ($i = 0; $i <= 5; $i++) {

        $objeto  = new pokerdice();

        array_push($arrayPokerDice, $objeto);
        var_dump($arrayPokerDice[$i]->throw());
    }
    getTotalThrows($throwns);
}

function getTotalThrows($throwns)
{


    echo "El numero total de lanzamientos ha sido de " . $throwns;
}


//$PokerDice1 = new PokerDice();

//echo $PokerDice1->shapeName();
//echo ($PokerDice1->throw());
//echo ThrownSameTime(5);
