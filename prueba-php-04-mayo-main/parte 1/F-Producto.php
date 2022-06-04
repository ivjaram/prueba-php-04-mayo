<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="fuction.js"></script>
    <title>Formulario Producto</title>
</head>
<body>
    <div class="contenedor">
        <form action="recibe-metodos/R-Producto.php" method="GET">
            <h3>Formulario Producto</h3>

            <label>Codigo Producto</label>
            <input type="Number" placeholder="ej:  231241" name="Codigo-producto">

            <label>Nombre Producto</label>
            <input type="text" placeholder="ej:  carioca" name="Nombre-producto">

            <label>Categoria</label>
            <input type="text" placeholder="ej:  5" name="Categoria_txt">

            <label>Fecha Elaboracion</label>
            <input type="date" placeholder="ej:  21/12/2022" name="Fecha-Elaboracion">

            <label>Precio</label>
            <input type="Number" placeholder="ej:  21.000" name="Precio_txt">

            <input type="submit" name="enviar-FProducto" value="Enviar" >
        </form>
    </div>
    <div class="volver">
        <form action="recibe.php">
        <input type="submit" id="volver" value="Volver">
        </form>
    </div>

</body>
</html>