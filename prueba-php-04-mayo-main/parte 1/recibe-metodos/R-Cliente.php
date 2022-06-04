<h1>Cliente</h1>
<script>alert("Se ah Enviado Correctamente la Informacion");</script>
<?php

if (isset($_POST['enviar-FCliente'])) {

    echo"El Rut del cliente es: ".$_POST['rut']."<br /> 
    El Nombre es: ".$_POST['nombre']."<br /> 
    El Apellido es: ".$_POST['apellido']."<br />
    Su Edad es: ".$_POST['edad-txt']."<br /> 
    su Comuna es: ".$_POST['comuna']."<br /> 
    su Ciudad es: ".$_POST['opt']."<br />";
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
    h1{
        text-align: center;
        font-family:Sans-serif;
    }

    body{
        background: url(../img/client.png);
        text-align: left;
        font-size: 3.5em;
        font-weight: bold;
    }

    input[type="submit"]{
        font-size: 1em;
        padding: 10px 60px;
        border-radius: 50px;
        color: white;
        background: red;
        align-content: left;
        font-weight: bold;
        margin-top: 30px;
        cursor: pointer;
        font-family:arial;
    }
</style>
<form action="../recibe.php" class="Salir">
    <input type="submit" value="Salir">
  </form>