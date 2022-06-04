<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="fuction.js"></script>
    <title>Formulario Cliente</title>
</head>
<body>
    <div class="principal">
        <div class="contenedor">
            <form name="formulario" action="recibe-metodos/R-Cliente.php" method="POST">
                <h3>Formulario Cliente</h3>

                <label>Rut</label>
                <input type="text" placeholder="ej:12345678-9" name="rut" id="rut" required oninput="checkRut(this)">

                <label>Nombre</label>
                <input type="text" onkeypress="return soloLetras(event)" id="name" >

                <label>Apellido</label>
                <input type="text" onkeypress="return soloLetras(event)" id="apellido">

                <label>Edad</label>
                <input type="Number" placeholder="ej:21" name="edad-txt"> 

                <select class="seleccion" name="comuna" onchange="cambia()">
                    <option value="0">Seleccione
                    <option value="1">Malleco
                    <option value="2">Cautin
                    </select>

                    <select class="seleccion" name="opt">

                    <option value="-">No hay datos</select>


                <input type="submit" name="enviar-FCliente" value="Enviar" id="btnvalida" onClick="CamposVaciosCliente()">
            </form>
        </div>
        <div class="volver">
            <form action="recibe.php">
            <input type="submit" id="volver" value="Volver">
            </form>
        </div>
    </div>
    

</body>

</html>