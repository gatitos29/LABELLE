<?php
require_once("../conexion.php");
$enlace = conexion();

if (isset($_POST['Identificacion']) && isset($_POST['contras'])) {

    $Ide = validate($_POST['Identificacion']);
    $clave = validate($_POST['contras']);

    // Use prepared statements to prevent SQL injection
    $stmt = $enlace->prepare("SELECT * FROM Empleados WHERE Id_Empleado=?");
    $stmt->bind_param("s", $Ide);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows != 0) {
        $rows = $result->fetch_assoc();

        // Verify the password
        if ($clave=$rows['Contrasenia']) {
            // Set session variables
            $_SESSION['usuario'] = $rows['Id_Empleado'];
            $_SESSION['rol'] = $rows['rol'];
            $_SESSION['id'] = $rows['Id_Empleado'];
            header("Location: ../TablaAdmin/index.php");
            
            exit(); // Ensure to exit after redirection
        } else {
            // Redirect with error if password is incorrect
            header("Location: Iniciarsesion.php?error=contraseña incorrecta");
            exit();
        }
    } else {
        // Redirect with error if user does not exist
        header("Location: Iniciarsesion.php?error=el usuario es incorrecto o no existe");
        exit();
    }
} else {
    // Redirect if POST parameters are not set
    header("Location: Iniciarsesion.php?error=datos incompletos");
    exit();
}

// Sanitize input function
function validate($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

$Mienlace = conexion();
$Ide=$_POST['Identificacion'];
$contra=$_POST['contras'];
$validar="SELECT * FROM Empleados WHERE Id_Empleado='$Ide'";
$ejecutar=mysqli_query($Mienlace,$validar);
if (mysqli_num_rows($ejecutar) != 0){
    while($cuenta = mysqli_fetch_assoc($ejecutar)){
        if($cuenta['Contrasenia']==$contra){
            header("Location: ../index.php");
            return true;
        }
    }
    echo "Contraseña incorrecta";
} else {
    echo "Usuario no encontrado";
}

