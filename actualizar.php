<?php
include("conexion.php");
$link = conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = intval($_POST["id"]);
    $od = mysqli_real_escape_string($link, $_POST["od"]);
    $nombre = mysqli_real_escape_string($link, $_POST["nombre"]);
    $precio = mysqli_real_escape_string($link, $_POST["precio"]);
    $talla1 = mysqli_real_escape_string($link, $_POST["talla1"]);
    $talla2 = mysqli_real_escape_string($link, $_POST["talla2"]);
    $talla3 = mysqli_real_escape_string($link, $_POST["talla3"]);
    $colores = mysqli_real_escape_string($link, $_POST["colores"]);
    $imagen = $_FILES["imagen"]["name"];
    
    $target_dir = "../imagenes/$od/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    if ($imagen) {
        $target_file = $target_dir . basename($imagen);
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            $imagen = mysqli_real_escape_string($link, $target_file);
        } else {
            die("Error al mover el archivo subido.");
        }
    } else {
        $imagen = mysqli_real_escape_string($link, $imagen);
    }
    
    $tablas_permitidas = ['hombre', 'mujer', 'interfaz', 'ninos', 'ninas']; 
    if (!in_array($od, $tablas_permitidas)) {
        die("Tabla no permitida.");
    }
    
    // Consulta preparada para evitar inyecciones SQL
    $sql = "UPDATE $od SET nombre=?, precio=?, talla1=?, talla2=?, talla3=?, colores=?, imagen=? WHERE id=?";
    $stmt = mysqli_prepare($link, $sql);
    
    if (!$stmt) {
        die("Error al preparar la consulta: " . mysqli_error($link));
    }

    mysqli_stmt_bind_param($stmt, "sssssssi", $nombre, $precio, $talla1, $talla2, $talla3, $colores, $imagen, $id);
    
    if (mysqli_stmt_execute($stmt)) {
        // Redireccionar después de la actualización
        header("Location: index.php");
        exit();
    } else {
        die("Error al ejecutar la consulta: " . mysqli_stmt_error($stmt));
    }
    
    mysqli_stmt_close($stmt);
}
?>