<?php
class computador{
    //creamos variables publicas con sus valores
    public $marca = NULL;
    public $capacidad = 0;
    public $ram = 0;

    public function __construct(string $marca, int $capacidad, int $ram){

        echo "accedemos al contructor de la computadora: {$marca}";
        //vamos a inicializar nuestro objeto instanciando nuestros atributos
        $this->marca=$marca;
        $this->capacidad=$capacidad;
        $this->ram=$ram;
    }
    public function __destruct(){
        echo "Eliminamos el computador: {$this->marca} \n";
    }

    public function imprimir(){

        echo "La marca es: {$this->marca}\n con capacidad de: {$this->capacidad}\n GB y con ram
        de: {$this->ram} GB \n";        
    }
}
$computador = new computador('Lenovo','1','16');
$computador->imprimir();

?>