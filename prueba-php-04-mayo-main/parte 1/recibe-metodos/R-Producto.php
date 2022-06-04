<h1>Producto</h1>
<script>alert("Se ah Enviado Correctamente la Informacion");</script>
<?php
if (isset($_GET['enviar-FProducto'])) {

    echo"El Codigo de Producto es: ".$_GET["Codigo-producto"]."<br /> 
    El Nombre del Poducto es: ".$_GET["Nombre-producto"]."<br /> 
    Su Categoria es: ".$_GET["Categoria_txt"]."<br />
    Su Fecha de Elaboracion es: ".$_GET['Fecha-Elaboracion']."<br /> 
    Su Precio es: ".$_GET['Precio_txt']."<br /> ";
}



?>
<style>
    body{
        text-align: center;
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