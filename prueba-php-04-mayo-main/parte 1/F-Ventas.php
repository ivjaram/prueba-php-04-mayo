<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="fuction.js"></script>
    <link rel="stylesheet" href="Styles/Style-FVentas.css">
    <title>Formulario Ventas</title>
</head>
<body>
    <div class="principal">
    <div class="contenedor">
        <form action="recibe-metodos/R-Ventas.php" method="POST">
            <h3>Formulario Ventas</h3>

            <label>Cantidad</label>
            <input type="Number" placeholder="ej:  23" name="cantidad_txt" id="num1" onkeyup="precioXcantidad()"><br />

            <label>Nombre Producto</label>
            <input type="text" placeholder="ej:  carioca" name="Nombre_producto" id="num3"><br />

            <label>Precio</label>
            <input type="Number" placeholder="ej:  21.000" name="Precio_txt" id="num2" onkeyup="precioXcantidad()"><br />

            <label>Precio x cantidad</label>
            <input type="text" placeholder="ej:  32.000" name="Precio_cantidad_txt" id="res"><br />

            <label>Total</label>
            <input type="text" placeholder="ej:  5.000.000" name="Total_txt" id="total"><br /><br />

            <input type="submit" name="enviar-FVentas" value="Enviar" onClick="CamposVaciosVentas()">
        </form >
    </div>
    <div class="volver">
        <form action="recibe.php">
        <input type="submit" id="volver" value="Volver">
        </form>
    </div>
    <div class="imagen">
            <img src="img/Venta.png";>
        </div>
    </div>
</body>
<style>
        img{
            width: 450px;
            border-radius: 50px;
            border: 3px solid black;
            margin: 50px 20px;
        }
    </style>
</html>