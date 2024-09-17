<html>

<head>
    <meta charset="utf-8">
    <title>CONTROL DE ACCESO USUARIO</title>
    <link rel="stylesheet" type="text/css" href="registro.css">
    <script type="text/javascript">

        function validar() {
            var Id = document.getElementById("Identificacion");
            var clave = document.getElementById("contras");

            if (Id.value == null || Id.value == "") {
                alert("La identificación es obligatoria");
                return false;
            }
            else {
                if (clave.value == null || clave.value == "") {
                    alert("La contraseña es obligatoria");
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
    <form action="ValidarSesion.php" method="POST" onsubmit="return validar()">
        <section class="MisDatos">
            <img class="logo" src="../logo.png" onclick="location.href='../index.php'">
            <h4>Iniciar Sesión</h4>
            <h3>SELECCIONE SU ROL</h3>
            <input class="boton" type="button" onclick="location.href='../Login/Iniciarsesion.php'" value="USUARIO">
            <input class="boton" type="button" value="EMPLEADO">
            <input class="caja" type="text" name="Identificacion" id="Identificacion" placeholder="Id" required>
            <input class="caja" type="password" name="contras" id="contras" placeholder="Contraseña" required>
            <input class="botones" type="submit" name="" value="Enviar">
            <div class="texto">
                <a style="color: rgba(255, 255, 255, 0.521);" href="../Login/olvidastedatoadmin.php">¿Olvidaste Algun Dato?</a><br>
                </div>
        </section>
    </form>
</body>
</html>