<?php
function conexion(){
//el servidor,usuario,contraseña//
$enlace = mysqli_connect("localhost","root","");
if (!$enlace){
exit;
}

//variable de seleccion//
$basedatos=mysqli_select_db($enlace,"zapateria");
if(!$basedatos){
    exit;
}

return($enlace);

}

?>