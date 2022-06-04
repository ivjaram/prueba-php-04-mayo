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
            <form action="recibe-metodos/R-Cliente.php" method="POST">
                <h3>Formulario Cliente</h3>

                <label>Rut</label>
                <input type="Number" placeholder="ej:12.345.678-9" name="rut-txt" id="rut_txt">

                <label>Nombre</label>
                <input type="" placeholder="ej:juanita" name="nombre-txt">

                <label>Apellido</label>
                <input type="text" placeholder="ej:perex" name="apellido-txt">

                <label>Edad</label>
                <input type="Number" placeholder="ej:21" name="edad-txt"> 
                
                <label>Ciudad</label>
                <Select name="operador2">
                <option >--Seleccionar--</option>
                <option >victoria</option>
                <option >Temuco</option>
                <label>Comuna</label>
                <Select name="operador">
                <option >--Seleccionar--</option>
                <option >Malleco</option>
                <option >Cautin</option><br />


                <input type="submit" name="enviar-FCliente" value="Enviar" id="btnvalida">
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