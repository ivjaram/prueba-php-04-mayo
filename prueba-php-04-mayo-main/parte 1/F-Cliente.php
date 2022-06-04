<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="fuction.js"></script>
    <link rel="stylesheet" href="Styles/Style-FCliente.css">
    <title>Formulario Cliente</title>
</head>
<body>
    <div class="principal">
        <div class="contenedor">
            <form name="formulario" action="recibe-metodos/R-Cliente.php" method="POST">
                <h3>Formulario Cliente</h3>

                <label>Rut</label>
                <input type="text" placeholder="ej:12345678-9" name="rut" id="rut" required oninput="checkRut(this)"><br />

                <label>Nombre</label>
                <input type="text" name="nombre" onkeypress="return soloLetras(event)"><br />

                <label>Apellido</label>
                <input type="text" name="apellido" onkeypress="return soloLetras(event)"><br />

                <label>Edad</label>
                <input type="Number" placeholder="ej:21" name="edad-txt"> <br />

                <select class="seleccion" name="comuna" onchange="cambia()">
                    <option value="0">Seleccione
                    <option value="1">Malleco
                    <option value="2">Cautin
                    </select>

                    <select class="seleccion" name="opt">

                    <option value="-">No hay datos</select><br /><br />


                <input type="submit" name="enviar-FCliente" value="Enviar" id="btnvalida" onClick="CamposVaciosCliente()">
            </form>
        </div>
        <div class="volver">
            <form action="recibe.php">
            <input type="submit" id="volver" value="Volver">
            </form>
        </div>
        <div class="imagen">
        <img src="img/Cliente.png";>
        </div>
    </div>
    
    

</body>
    <style>
        img{
            width: 450px;
            border-radius: 50px;
            border: 3px solid black;
            margin: 30px;
        }
    </style>
</html>