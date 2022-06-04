<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/Style-Recibe.css">
    <title>Formularios</title>
</head>
<body>
    <div class="titulo">
    <h1>Formularios</h1>
    </div>
    <div class="volver">
        <form action="index.html">
        <input type="submit" id="volver" value="Cerrar Secion">
        
        </form>
    </div>
    <div class="principal">
        <div class="contenedores">

            <form action="F-Cliente.php">
                <img src="img/Cliente.png" from="btn-Cliente">
                <input type="submit" value="Formulario Cliente" id="btn-Cliente">
            </form>
        </div>
        <div class="contenedores">

            <form action="F-Producto.php">
                <img src="img/producto.png" from="btn-Producto">
                <input type="submit" value="Formulario Producto" id="btn-Producto">
            </form>

        </div>
        <div class="contenedores">

             <form action="F-Ventas.php">
             <img src="img/Venta.png" from="btn-Ventas">
                <input type="submit" value="Formulario Ventas" id="btn-Ventas">
            </form>

        </div>

    </div>

</body>
</html>