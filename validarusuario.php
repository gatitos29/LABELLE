<?php
require_once("../conexion.php");
$Mienlace = conexion();
$Ide=$_POST['user'];
$contra=$_POST['clave'];
$validar="SELECT * FROM usuarios WHERE User_Usuarios='$Ide'";
$ejecutar=mysqli_query($Mienlace,$validar);
if (mysqli_num_rows($ejecutar) != 0){
    while($cuenta = mysqli_fetch_assoc($ejecutar)){
        if($cuenta['Contrasenia_Usuarios']==$contra){
            header("Location: ../index.php");
            return true;
        }
    }
    echo "Contraseña incorrecta";
} else {
    echo "Usuario no encontrado";
}

?>