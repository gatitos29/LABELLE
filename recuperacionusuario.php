<html>

<head>
    <meta charset="utf-8">
    <title>CONTROL DE ACCESO USUARIO</title>
    <link rel="stylesheet" type="text/css" href="registro.css">
    <script type="text/javascript">

        function validar() {
            var nom = document.getElementById("clave1");
            var ap = document.getElementById("clave2");
            var ap2 = document.getElementById("clave3");

            if (nom.value == null || nom.value == "") {
                alert("Debe Llenar Todos Los Campos");
                return false;
            }
            else {
                if (ap.value == null || ap.value == "") {
                    alert("Debe Llenar Todos Los Campos");
                    return false;
                }else {
                if (ap.value == null || ap2.value == "") {
                    alert("Debe Llenar Todos Los Campos");
                    return false;
                }
                else {
                    alert("Datos Correctos");
                    return true;
                }

            }
        }
    }
    </script>
</head>

<body>
    <form action="" onsubmit="return validar()">
        <section class="MisDatos">
            <img class="logo" src="../logo.png" onclick="location.href='../index.php'">
            <h4>Nueva Cotraseña</h4>
            <h4>Ingrese el codigo que se envio a su correo</h4>
            <input class="caja" type="text" name="contra" id="clave1" placeholder="codigo">
            <input class="caja" type="password" name="contra" id="clave2" placeholder="Nueva Contraseña" required>
            <input class="caja" type="password" name="contra" id="clave3" placeholder="Confirmar Contraseña" required>
            <input class="botones" type="submit" name="" value="Enviar" >
            <div class="texto">
            <a style="color: rgba(255, 255, 255, 0.521); text-align: center;" href="../Login/Iniciarsesion.php">Iniciar Sesión</a>
              </div>
        </section>
    </form>
</body>
</html>