<?php
require 'computador';
class persona extends computador{

    public $nombre = NULL;
    public $apellido = NULL;
    public $edad = 0;
    public $direccion = NULL;

    public function __contruct(string $nombre, string $apellido, int $edad, string $direccion){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
        $this->direccion=$direccion;
    }
    public function __destruct(){
        echo "Eliminamos a el ser humano ese: {$this->nombre}<br />";
    }
    public function imprimirconst(){
        echo "el nombre es: {$this->nombre} <br />El apellido es: {$this->apellido} <br />
        La edad es: {$this->edad}<br />La Direccion es: {$this->direccion}<br />";
    }
    
}
class persona23 extends computador{
    public function imprime(){
        $this->imprimir();
    }
}
$computador12 = new computador('Lenovo','1','16');
$computador12->imprime
$persona1 = new persona('Josue','Soto','43','calama #2316');
$persona1->imprimirconst();

?>