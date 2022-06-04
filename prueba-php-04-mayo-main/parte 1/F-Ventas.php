<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="fuction.js"></script>
    <title>Formulario Ventas</title>
</head>
<body>
    <div class="contenedor">
        <form action="recibe-metodos/R-Ventas.php" method="POST">
            <h3>Formulario Ventas</h3>

            <label>Cantidad</label>
            <input type="Number" placeholder="ej:  23" name="cantidad_txt" id="num1" onkeyup="precioXcantidad()">

            <label>Nombre Producto</label>
            <input type="text" placeholder="ej:  carioca" name="Nombre_producto">

            <label>Precio</label>
            <input type="text" placeholder="ej:  21.000" name="Precio_txt" id="num2" onkeyup="precioXcantidad()">

            <label>Precio x cantidad</label>
            <input type="Number" placeholder="ej:  32.000" name="Precio_cantidad_txt" id="res">

            <label>Total</label>
            <input type="Number" placeholder="ej:  5.000.000" name="Total_txt" id="total">

            <input type="submit" name="enviar-FVentas" value="Enviar">
        </form >
    </div>
    <div class="volver">
        <form action="recibe.php">
        <input type="submit" id="volver" value="Volver">
        </form>
    </div>

</body>
</html>