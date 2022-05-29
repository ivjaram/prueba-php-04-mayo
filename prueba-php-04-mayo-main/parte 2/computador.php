<?php

class computador{
    //creamos variables publicas con sus valores
    public $marca = " ";
    public $capacidad = 0;
    public $ram = 0;

    public function __construct($marca,$capacidad,$ram){

        echo "<h1>accedemos al contructor de la computadora: {$marca} </h1><br />";
        //vamos a inicializar nuestro objeto instanciando nuestros atributos
        $this->marca=$marca;
        $this->capacidad=$capacidad;
        $this->ram=$ram;
    }
    public function __destruct(){
        return "Eliminamos el computador: {$this->marca} <br />";
    }

    public function imprimir2(){

        echo "La marca es: {$this->marca}<br /> con capacidad de: {$this->capacidad} GB<br /> y con ram
        de: {$this->ram} GB <br /><hr>";        
    }

}

?>