<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="fuction.js"></script>
    <link rel="stylesheet" href="Styles/Style-FProducto.css">
    <title>Formulario Producto</title>
</head>
<body>
    <div class="principal">
        <div class="contenedor">
            <form name="product"action="recibe-metodos/R-Producto.php" method="GET">
                <h3>Formulario Producto</h3>

                <label>Codigo Producto</label>
                <input type="text" placeholder="ej:  231241" name="Codigo-producto" id="n1"><br />

                <label>Nombre Producto</label>
                <select class="seleccion" name="opt">
                <option value="-">No hay datos</select><br />

                <label>Categoria</label>
                <select class="seleccion" name="Categoria" onchange="Producto()">
                        <option value="0">Seleccione
                        <option value="1">Confites
                        <option value="2">Abarrotes
                        <option value="3">Lacteos
                        <option value="4">Bebidas
                        </select><br />

                <label>Fecha Elaboracion</label>
                <input type="date" placeholder="ej:  21/12/2022" name="Fecha-Elaboracion"><br />

                <label>Precio</label>
                <input type="text" placeholder="ej:  21.000" name="Precio_txt" id="n3"><br /><br />

                <input type="submit" name="enviar-FProducto" value="Enviar" onClick="CamposVaciosProducto()">
            </form>
        </div>
        <div class="volver">
            <form action="recibe.php">
            <input type="submit" id="volver" value="Volver">
            </form>
        </div>
        <div class="imagen">
            <img src="img/Producto.png";>
        </div>
    </div>

</body>
<script type="text/javascript">

var opt_1 = new Array ("Collas x24", "kilombo x20", "Kilate x20", "super 8 x32");
var opt_3 = new Array ("ConFort x48", "Toallas Humedas", "Escobas", "Detergente");
var opt_2 = new Array ("Yoguitos", "1 + 1", "Protehin", "Mantequilla");
var opt_4 = new Array ("CCU", "Coca-Cola", "Serrano", "TAÍ");

function Producto() {

var Categoria;
Categoria = document.product.Categoria[document.product.Categoria.selectedIndex].value;

if (Categoria != 0) {

    mis_opts = eval("opt_" + Categoria);
    num_opts = mis_opts.length;

    document.product.opt.length = num_opts;
    for (i = 0; i < num_opts; i++) {
        document.product.opt.options[i].value = mis_opts[i];
        document.product.opt.options[i].text = mis_opts[i];
    
    }
     
}
else {
    document.product.opt.length = 1;
    document.product.opt.options[0].value = '-';
    document.product.opt.options[0].text = '-';
}
document.product.opt.options[0].selected = true;
}
</script>
<style>
        img{
            width: 450px;
            border-radius: 50px;
            border: 3px solid black;
            margin: 50px 20px;
        }
    </style>
</html>