/**
 * Created by admin on 16/01/2018.
 */
function mostrarsmsg() {
    alert("diste click");
}
function fn001() {
    var x1 = document.getElementById("idmatricula").value;
    var y1 = document.getElementById("nombre").value;
    var z1 = document.getElementById("materno").value;
    var result = parseInt(x1)+parseInt(y1)+parseInt(z1);
    document.getElementById("paterno").value = result;
}

function color() {
    document.getElementsByClassName("control").style.color='red';
}
function inner() {
    document.getElementById("labelname").innerHTML = "<h1>"+"Cambiaste la etiqueta Nombre"+"</h1>";

}