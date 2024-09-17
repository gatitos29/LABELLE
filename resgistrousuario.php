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
    <form method="POST" action="insertlogin.php" onsubmit="return validar()">
        <section class="MisDatos">
            <img class="logo" src="../logo.png" onclick="location.href='../index.php'">
            <h4>Registrate Aqui </h4>
            <input class="caja" type="text" name="usuario" id="usuario" placeholder="Usuario" required>
            <input class="caja" type="text" name="email" id="email" placeholder="Email" required>
            <input class="caja" type="password" name="contra" id="contra" placeholder="Contraseña" required>
            <input class="botones" type="submit" name="" value="Enviar">
            <a style="color: rgba(255, 255, 255, 0.521); text-align: center;" href="../Login/Iniciarsesion.php">Iniciar Sesión</a>
        </section>
    </form>
</body>

</html>