<?php 
    require_once("../conexion.php");
    $enlace=conexion();
    $sql="INSERT INTO usuarios (User_Usuarios,Email_Usuarios,Contrasenia_Usuarios) VALUES
    ('".$_POST["usuario"]."','".$_POST["email"]."','".$_POST["contra"]."')";
    mysqli_query($enlace,$sql);
    header("Location: ../index.php");
    exit;
?>