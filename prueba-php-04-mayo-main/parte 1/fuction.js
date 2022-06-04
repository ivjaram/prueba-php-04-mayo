function FechaActual(){

    var fecha = new Date();
    var hora =  new date_default_timezone_set('America/Mexico_City');

    document.write(fecha +" "+hora);

}

//funcion en la tabla clientes de validad campos de texto sin numeros
function soloLetras(e) {
    var key = e.keyCode || e.which;
    var teclado = String.fromCharCode(key).toLowerCase();
    var letras = "abcdefghijklmnñopqrstuvwxyz";
    var especiales = "8 - 37 - 38- 46-164";
    var tecla_especial = false;

    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(teclado) == -1 && !tecla_especial) {
        return false;
    }
}

//Funcion para validar rut
function checkRut(rut) {
    var valor = rut.value.replace('.', '');
    valor = valor.replace('-', '');
    cuerpo = valor.slice(0, -1);
    dv = valor.slice(-1).toUpperCase();

    rut.value = cuerpo + '-' + dv
    if (cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false; }

    suma = 0;
    multiplo = 2;

    for (i = 1; i <= cuerpo.length; i++) {
        index = multiplo * valor.charAt(cuerpo.length - i);
        suma = suma + index;
        if (multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }

    }
    dvEsperado = 11 - (suma % 11);
    dv = (dv == 'K') ? 10 : dv;
    dv = (dv == 0) ? 11 : dv;
    if (dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    rut.setCustomValidity('');
}

//funcion creada de la clase F-Ventas.php
function precioXcantidad() {
    var num1 = Number(document.getElementById('num1').value);
    var num2 = Number(document.getElementById('num2').value);
    var res = num1 * num2;
    document.getElementById('res').value = res;
    document.getElementById('total').value = res;
}
//Funcion del formulario Cliente de campos vacios
function CamposVaciosCliente() {
    var name = document.getElementById('name').value;
    var apellido = document.getElementById('apellido').value;

    if (name.length == 0 || /^\s+$/.test(name)) {
        alert("El Campo Nombre esá Vacio");
    } else if (apellido.length == 0 || /^\s+$/.test(apellido)) {
        alert("El Campo Apellido esá Vacio");
    }
}
//Funcion del formulario Producto de campos vacios
function CamposVaciosProducto() {
    var num1 = document.getElementById('n1').value;
    var num2 = document.getElementById('n2').value;
    var num3 = document.getElementById('n3').value;

    if (num1.length == 0 || /^\s+$/.test(num1)) {
        alert("El Campo Codigo Producto esá Vacio");
    } else if (num2.length == 0 || /^\s+$/.test(num2)) {
        alert("El Campo Nombre Producto esá Vacio");
    } else if (num3.length == 0 || /^\s+$/.test(num3)) {
        alert("El Campo Precio esá Vacio");
    }

}
//Funcion del formulario Ventas de campos vacios
function CamposVaciosVentas() {
    var num1 = document.getElementById('num1').value;
    var num2 = document.getElementById('num3').value;
    var num3 = document.getElementById('num2').value;
    var num4 = document.getElementById('res').value;
    var num5 = document.getElementById('total').value;

    if (num1.length == 0 || /^\s+$/.test(num1)) {
        alert("El Campo Cantidad esá Vacio");
    } else if (num2.length == 0 || /^\s+$/.test(num2)) {
        alert("El Campo Nombre Producto esá Vacio");
    } else if (num3.length == 0 || /^\s+$/.test(num3)) {
        alert("El Campo Precio esá Vacio");
    } else if (num4.length == 0 || /^\s+$/.test(num4)) {
        alert("El Campo Precio x cantidad esá Vacio");
    } else if (num5.length == 0 || /^\s+$/.test(num5)) {
        alert("El Campo Total esá Vacio");
    }

}
// Funcion de Formulario Cliente
var opt_1 = new Array("No hay datos", "Victoria", "Angol", "Collipulli", "Lumaco", "Traiguen", "Renaico", "Ercilla", "Los Sauces", "Puren", "Curacautin", "Lonquimay");
var opt_2 = new Array("No hay datos", "Temuco", "Freire", "Carahue", "Gorbea", "Loncoche", "Nueva tolten", "CholChol", "Pucon", "Nueva Imperial", "Cunco", "Perquenco", "Vilcun", "Melipeuco", "Villarica", "Curarrehue", "Teodoro Schmidt", "Galvarino", "Padre las Casas", "Labranza", "Cherquenco", "Pillanlelbun");

function cambia() {

    var comuna;
    comuna = document.formulario.comuna[document.formulario.comuna.selectedIndex].value;

    if (comuna != 0) {

        mis_opts = eval("opt_" + comuna);
        num_opts = mis_opts.length;

        document.formulario.opt.length = num_opts;
        for (i = 0; i < num_opts; i++) {
            document.formulario.opt.options[i].value = mis_opts[i];
            document.formulario.opt.options[i].text = mis_opts[i];
        }
    }
    else {
        document.formulario.opt.length = 1;
        document.formulario.opt.options[0].value = '-';
        document.formulario.opt.options[0].text = '-';
    }
    document.formulario.opt.options[0].selected = true;
}



