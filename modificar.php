<?php
require_once("conexion.php");
$Mienlace = Conexion();

if (isset($_GET["id"]) && isset($_GET["od"])) {
    $id = intval($_GET["id"]); 
    $od = mysqli_real_escape_string($Mienlace, $_GET["od"]);

    echo "Valor de 'od': " . htmlspecialchars($od) . "<br>";

    $tablas_permitidas = ['hombre', 'mujer', 'interfaz', 'ninos', 'ninas']; 
    if (!in_array($od, $tablas_permitidas)) {
        echo "Tabla no permitida.";
        exit();
    }
    
    // Consulta segura
    $stmt = mysqli_prepare($Mienlace, "SELECT * FROM $od WHERE id = ?");
    if (!$stmt) {
        echo "Error al preparar la consulta: " . mysqli_error($Mienlace);
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $id);
    if (!mysqli_stmt_execute($stmt)) {
        echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt);
        exit();
    }
    $result = mysqli_stmt_get_result($stmt);
} else {
    echo "ID o nombre de la tabla no especificado.";
    exit();
}
?>

<form action="actualizar.php" method="post" enctype="multipart/form-data">
<table border="1" cellspacing="3" cellpadding="2" style="margin:auto; text-align:center; color:black;">
    <tr style="color:black;">
        <td>ID</td>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Existencias</td>
        <td>Talla1</td>
        <td>Talla2</td>
        <td>Talla3</td>
        <td>Colores</td>
        <td>Imagen</td>
    </tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td><input type='text' name='id' value='" . htmlspecialchars($row['id']) . "' readonly></td>
        <td><input type='text' name='nombre' value='" . htmlspecialchars($row['nombre']) . "'></td>
        <td><input type='text' name='precio' value='" . htmlspecialchars($row['precio']) . "'></td>
        <td><input type='text' name='existencias' value='" . htmlspecialchars($row['existencias']) . "'></td>
        <td><input type='text' name='talla1' value='" . htmlspecialchars($row['talla1']) . "'></td>
        <td><input type='text' name='talla2' value='" . htmlspecialchars($row['talla2']) . "'></td>
        <td><input type='text' name='talla3' value='" . htmlspecialchars($row['talla3']) . "'></td>
        <td><input type='text' name='colores' value='" . htmlspecialchars($row['colores']) . "'></td>
        <td><input type='file' name='imagen'></td>
    </tr>";
}
mysqli_free_result($result);
?>

<tr>
    <td colspan="9">
        <input type="hidden" name="od" value="<?php echo htmlspecialchars($od); ?>">
        <input type="submit" name="accion" value="Guardar">
    </td>
</tr>
</table>
</form>
</body>
</html>
