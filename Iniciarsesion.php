<html>

<head>
    <meta charset="utf-8">
    <title>CONTROL DE ACCESO USUARIO</title>
    <link rel="stylesheet" type="text/css" href="registro.css">
    <script type="text/javascript">

        function validar() {
            var nom = document.getElementById("nombres");
            var ap = document.getElementById("apellidos");

            if (nom.value == null || nom.value == "") {
                alert("El nombre es obligatorio");
                return false;
            }
            else {
                if (ap.value == null || ap.value == "") {
                    alert("El apellido es obligatorio");
                    return false;
                }
                else {
                    alert("Datos Correctos");
                    return true;
                }

            }
        }
    </script>
</head>

<body>
    <form method="POST" action="validarusuario.php" onsubmit="return validar()">
        <section class="MisDatos">
            <img class="logo" src="../logo.png" onclick="location.href='../index.php'">
            <h4>Iniciar Sesión</h4>
            <h3>ESCOJA SU ROL</h3>
            <input class="boton" type="button" value="USUARIO">
            <input class="boton" type="button" onclick="location.href='../Login/iniciarseccionadmin.php'" value="EMPLEADO">
            <input class="caja" type="text" name="user" id="user" placeholder="Usuario" required>
            <input class="caja" type="password" name="clave" id="clave" placeholder="Contraseña" required>
            <input class="botones" type="submit" name="" value="Enviar">
            <div class="texto">
            <a style="color: rgba(255, 255, 255, 0.521);" href="../Login/olvidecontrausuario.php">¿Olvidaste tu Contraseña?</a><br>
            <a style="color: rgba(255, 255, 255, 0.521); text-align: center;" href="../Login/resgistrousuario.php">Registrate</a>
              </div>
        </section>
    </form>
</body>
</html>