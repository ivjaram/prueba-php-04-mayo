


$("#btnvalida").click(function () {
    if (Fn.validaRut($("#rut_txt").val())) {
        $("#msgerror").html("El rut ingresado es válido :D");
    } else {
        $("#msgerror").html("El Rut no es válido :'( ");
    }
});
//funcion creada de la clase F-Ventas.php
function precioXcantidad() {
    var num1 = Number(document.getElementById('num1').value);
    var num2 = Number(document.getElementById('num2').value);
    var res = num1 * num2;
    document.getElementById('res').value = res;
    document.getElementById('total').value = res;
}