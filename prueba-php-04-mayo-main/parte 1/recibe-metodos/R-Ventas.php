<h1>Ventas</h1>

<script>alert("Se ah Enviado Correctamente la Informacion");</script>
<?php
   $fecha_ingreso = date('d-m-Y')."<br />";
   echo "<h3>La Fecha es: ".$fecha_ingreso."</h3><br /> ";

if (isset($_POST['enviar-FVentas'])) {

    echo"la cantidad es: ".$_POST["cantidad_txt"]."<br /> 
    El Nombre es: ".$_POST["Nombre_producto"]."<br /> 
    Su precio es de: ".$_POST["Precio_txt"]."<br />
    Su precio x cantidad es: ".$_POST['Precio_cantidad_txt']."<br /> 
    Su total es: ".$_POST['Total_txt']."<br />";
}



?>
<style>
    body{
        background: #F7BD2F;
        font-size: 3em; 
        font-weight: bold;
        text-align: center;
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
        background: url(../img/ventas.png);
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
    }
</style>
<form action="../recibe.php" class="Salir">
    <input type="submit" value="Salir">
  </form>