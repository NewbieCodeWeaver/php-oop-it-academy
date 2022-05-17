<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Banco online</title>
    <link rel="stylesheet" href="estilos.css">

<BODY>
    <div id="caja-principal">
        <div id="header">
            <h1>Banco Online</h1>
        </div>
        <div id="body">
            <FORM METHOD="POST">
                <div id="label-ingresar">Ingresar</div>
                <INPUT TYPE="TEXT" NAME="cantidadIngresar"><br>
                <div id="label-retirar">Retirar</div>
                <INPUT TYPE="TEXT" NAME="cantidadRetirar"><br>
                <INPUT TYPE="SUBMIT">
            </FORM>
        </div>
        <div id="footer"></div><div id="php"><?php


session_start();

class cuentas
{

    private $numeroCuenta;
    private $nombre;
    private $apellidos;
    private $saldo;


    public function __construct($numeroCuenta, $nombre, $apellidos, $saldo = 0)
    { // predeterminado 0 euros

        $this->numeroCuenta = $numeroCuenta;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {


        return $this->saldo;
    }

    public function getNombre()
    {


        return $this->nombre;
    }

    public function getApellido()
    {


        return $this->apellido;
    }


    public function setSaldo($saldo)
    {

        $this->saldo = $saldo;
    }

    public function setApellido($apellido)
    {

        $this->apellido = $apellido;
    }

    function depositarDinero($cantidadIngresar)
    {
        $_SESSION["totalSaldo"] = $cantidadIngresar +  $_SESSION["totalSaldo"];

        $this->setSaldo($_SESSION["totalSaldo"]);

        echo "Has ingresado " . $cantidadIngresar . " euros. Tu saldo actual es " . $this->getSaldo() . " euros.";
    }


    function retirarDinero($cantidadRetirar)
    {

        if ($cantidadRetirar >  $_SESSION["totalSaldo"]) {

            echo "Error. Saldo insuficiente";
        } else {

            $_SESSION["totalSaldo"] = ($_SESSION["totalSaldo"] - $cantidadRetirar);

            $this->setSaldo($_SESSION["totalSaldo"]);

            echo "Has retirado " . $cantidadRetirar . " euros. Tu saldo actual es " . $this->getSaldo() . " euros.";
        }
    }
}

$banco1 = new cuentas(23134, "Carlos", "Martinez", 0);


if (!empty($_POST['cantidadIngresar'])) {

    $banco1->depositarDinero($_POST['cantidadIngresar']);
}

if (!empty($_POST['cantidadRetirar'])) {
    $banco1->retirarDinero($_POST['cantidadRetirar']);
}

?></div>
    </div>

</html>