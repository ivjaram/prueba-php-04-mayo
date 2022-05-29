<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ventas</title>
</head>
<body>
    <div class="contenedor">
        <form action="#" method="Post">
            <h3>Formulario Ventas</h3>

            <label>Cantidad</label>
            <input type="Number" placeholder="ej:  23">

            <label>Nombre Producto</label>
            <input type="text" placeholder="ej:  carioca">

            <label>Precio</label>
            <input type="text" placeholder="ej:  21.000">

            <label>Precio x cantidad</label>
            <input type="Number" placeholder="ej:  32.000">

            <label>Total</label>
            <input type="Number" placeholder="ej:  5.000.000">
            <input type="submit" id="enviar-FVentas" value="Enviar">
        </form >
    </div>
    <div class="volver">
        <form action="recibe.php">
        <input type="submit" id="volver" value="Volver">
        </form>
    </div>

</body>
</html>