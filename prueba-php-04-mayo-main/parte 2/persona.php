<?php
require 'computador.php';

class persona extends computador{

    public $nombre = NUll;
    public $apellido = NUll;
    public $edad = 0;
    public $direccion = NUll;

    public function __construct($nombre, $apellido, $edad, $direccion){
       
        echo "<hr> <h1>accediendo a la persona: {$nombre}</h1><br />";
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
        $this->direccion=$direccion;
       
    }
    public function __destruct(){
        return "Eliminamos a el ser humano ese: {$this->nombre}<br /><hr>";
    }
    public function imprimir1(){
        echo "el nombre es: {$this->nombre} <br />El apellido es: {$this->apellido} <br />
        La edad es: {$this->edad}<br />La Direccion es: {$this->direccion}<br /><hr>";
    }
    

}
$persona1 = new persona('Josue','Soto',12,'hola');
$persona1->imprimir1();

$persona2 = new computador('Lenovo',4,12);
$persona2->imprimir2();

//$computador12 = new computador('Lenovo',1,16);


?>