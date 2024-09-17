<?php 
    require_once("conexion.php");
    $enlace=conexion();
    $genero=$_POST["genero"];
    if(isset($_FILES["imagen"])){
        $file=$_FILES["imagen"];
        $img_n=$file["name"];
        $tipo=$file["type"];
        $ruta_provisional=$file["tmp_name"];
        $size=$file["size"];
        $carpeta="../imagenes/$genero/";
        if($tipo!="image/jpg" && $tipo!="image/JPG" && $tipo!="image/jpeg" && $tipo!="image/png" && $tipo!="image/gif"){
            echo "Error, el archivo no es una imagen";
            }elseif($size > 3*1024*1024){
                echo "Error, el tamaño máximo permitido es un 3MB";
                }else{
                    $src=$carpeta.$img_n;
                    move_uploaded_file($ruta_provisional,$src);
                    $perfil=$carpeta.$img_n;
                }
            }
    $sql="insert into $genero (id,nombre,precio,existencias,talla1,talla2,talla3,colores,imagen) values
    ('".$_POST["id"]."','".$_POST["nombre"]."','".$_POST["precio"]."','".$_POST["existencias"]."','".$_POST["talla1"]."','".$_POST["talla2"]."','".$_POST["talla3"]."','".$_POST["colores"]."','".$perfil."')";
    mysqli_query($enlace,$sql);
    header("Location: index.php");
?>