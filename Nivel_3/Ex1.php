<html>
<BODY><div><div id="header">
<h1>Banco Online</h1></div>
<div id="body"><FORM METHOD="POST">
Ingresar<br>
<INPUT TYPE="TEXT" NAME="cantidadIngresar"><br>
Retirar<br>
<INPUT TYPE="TEXT" NAME="cantidadRetirar"><br>
<INPUT TYPE="SUBMIT">
</FORM></div><div id="footer"></div></div><?php

class cuentas {

    private $numeroCuenta;
    private $nombre;
    private $apellidos;
    private $saldo;


public function __construct($numeroCuenta,$nombre,$apellidos,$saldo = 0) { // predeterminado 0 euros

    $this->numeroCuenta = $numeroCuenta;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->saldo = $saldo;

}

public function getSaldo() {


    return $this->saldo;

}

public function getNombre() {


    return $this->nombre;
}

public function getApellido() {


    return $this->apellido;

}


public function setSaldo($saldo) {

    $this->saldo = $saldo; 

}

public function setApellido($apellido) {

    $this->apellido = $apellido;

}

function depositarDinero($cantidadIngresar) {

    $cantidadTotal = $cantidadIngresar + $this->getSaldo();

    $this->setSaldo($cantidadTotal);

    echo "Has ingresado ". $cantidadIngresar . " euros. Tu saldo actual es " . $this->getSaldo() . " euros.";   

}


function retirarDinero($cantidadRetirar) {

    if($cantidadRetirar > $this->getSaldo()) {

        echo "Error. Saldo insuficiente";
    
    } else {
        
        $saldoActual = ($this->getSaldo() - $cantidadRetirar);

$this->setSaldo($saldoActual);

    echo "Has retirado ". $cantidadRetirar . " euros. Tu saldo actual es " . $this->getSaldo() . " euros.";

}}  

}

$banco1 = new cuentas(23134,"Carlos","Martinez",100);

    if (!empty($_POST['cantidadIngresar']))  { $banco1->depositarDinero($_POST['cantidadIngresar']); }

    if (!empty($_POST['cantidadRetirar']))  { $banco1->retirarDinero($_POST['cantidadRetirar']); }


?>

</html>