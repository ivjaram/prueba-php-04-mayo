<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cliente</title>
</head>
<body>
    <div class="contenedor">
        <form action="#" method="Post">
            <h3>Formulario Cliente</h3>

            <label>Rut</label>
            <input type="Number" placeholder="ej:12.345.678-9">

            <label>Nombre</label>
            <input type="text" placeholder="ej:juanita">

            <label>Apellido</label>
            <input type="text" placeholder="ej:perex">

            <label>Edad</label>
            <input type="Number" placeholder="ej:21">

            <Select id="Comuna">Comuna</Select>
            <option value="Malleco">1</option>
            <option value="Cautin">2</option>

            <Select id="ciudades">Ciudad</Select>
            <option>Malleco</option>
            <option>Cautin</option>
            <input type="submit" id="enviar-FCliente" value="Enviar">
        </form>
    </div>
    <div class="volver">
        <form action="recibe.php">
        <input type="submit" id="volver" value="Volver">
        </form>
    </div>

</body>
</html>