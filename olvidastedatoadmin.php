<html>

<head>
    <meta charset="utf-8">
    <title>CONTROL DE ACCESO USUARIO</title>
    <link rel="stylesheet" type="text/css" href="registro.css">
    <script type="text/javascript">

        function validar() {
            var nom = document.getElementById("nombres");
            var ap = document.getElementById("clave");

            if (nom.value == null || nom.value == "") {
                alert("Todos Los Campos son Obligatorios");
                return false;
            }
            else {
                if (ap.value == null || ap.value == "") {
                    alert("Todos Los Campos son Obligatorios");
                    return false;
                }
                else {
                    alert("Su Corre se Envio Espere Respuesta");
                    return true;
                }

            }
        }
    </script>
</head>

<body>
    <form action="" onsubmit="return validar()">
        <section class="MisDatos">
            <img class="logo" src="../logo.png" onclick="location.href='../index.php'">
            <h4>Restaurar Contraseña</h4>
            <h4>Escriba a la Empresa para Actualizar</h4>
            <input class="caja" type="text" name="nombres" id="nombres" placeholder="Email Empresa" required>
            <input class="caja" type="text" name="clave" id="clave" placeholder="Razon del Mensaje" required>
            <input class="botones" type="submit" name="" value="Enviar">
            <a style="color: rgba(255, 255, 255, 0.521); text-align: center;" href="../Login/iniciarseccionadmin.php">Iniciar Sesión</a>
            <div class="texto">
              </div>
        </section>
    </form>
</body>
</html>