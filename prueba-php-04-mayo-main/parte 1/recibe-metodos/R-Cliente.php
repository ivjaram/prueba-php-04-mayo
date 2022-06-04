<h1>Cliente</h1>
<script>alert("Se ah Enviado Correctamente la Informacion");</script>
<?php

if (isset($_POST['enviar-FCliente'])) {

    echo"El Rut del cliente es: ".$_POST["rut-txt"]."<br /> 
    El Nombre es: ".$_POST["nombre-txt"]."<br /> 
    El Apellido es: ".$_POST["apellido-txt"]."<br />
    Su Edad es: ".$_POST['edad-txt']."<br /> 
    su Comuna es: ".$_POST['operador']."<br /> 
    su Ciudad es: ".$_POST['operador2']."<br />";
}



?>
<style>
    body{
        background: #F7BD2F;
        font-size: 3em; 
        font-weight: bold;
    }
    input[type="submit"]{
        font-size: 1.5em;
      padding: 10px 60px;
      border-radius: 50px;
      color: white;
      background: red;
      align-content: left;
      font-weight: bold;
      margin-top: 30px;
      cursor: pointer;
    }
</style>
<form action="../recibe.php" class="Salir">
    <input type="submit" value="Salir">
  </form>