<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <title>MENU</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#"></a></li> <!--NO BORRA, ES LA UBICACION DE ICONO DE LA CASA-->
                        <li><a href="#hombre">Hombre</a>
                            <ul>
                                <li><a href="#formal1">Formal</a></li>
                                <li><a href="#casual1">Casual</a></li>
                                <li><a href="#deportivo1">Deportivo</a></li>
                                <li><a href="#sandalias1">Sandalias</a></li>
                            </ul>
                        </li>
                        <li><a href="#mujer">Mujer</a>
                            <ul>
                                <li><a href="#formal2">Formal</a></li>
                                <li><a href="#casual2">Casual</a></li>
                                <li><a href="#deportivo2">Deportivo</a></li>
                                <li><a href="#sandalias2">Sandalias</a></li>
                            </ul>
                        </li>
                        <li><a href="#niños">Niños</a>
                            <ul>
                                <li><a href="#formal3">Formal</a></li>
                                <li><a href="#casual3">Casual</a></li>
                                <li><a href="#deportivo3">Deportivo</a></li>
                                <li><a href="#sandalias3">Sandalias</a></li>
                            </ul>
                        </li>
                        <li><a href="#niñas">Niñas</a>
                            <ul>
                                <li><a href="#formal4">Formal</a></li>
                                <li><a href="#casual4">Casual</a></li>
                                <li><a href="#deportivo4">Deportivo</a></li>
                                <li><a href="#sandalias4">Sandalias</a></li>
                            </ul>
                        </li>
                        <li><a></a><!--NO BORRAR, ICONO DEL LOGUEO-->
                            <ul>
                                <li class="usuario"><a href="../Encabezado/Login/Iniciarsesion.php">Iniciar Sesión</a>
                                </li>
                                <li class="usuario"><a href="../Encabezado/Login/resgistrousuario.php">Registrarme</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div style="padding-top: 3%;" class="contenedor_gif">
        <img id="gif1" name="gif1" class="gif1" src="../Encabezado/imagenesinterfaz/productos de miratr/bordeblanco1.jpg"
            alt="Girl in a jacket">
        <img id="gif2" name="gif2" class="gif2" src="../Encabezado/imagenesinterfaz/productos de miratr/bordeblanco2.jpg"
            alt="Girl in a jacket">
        <img id="gif3" name="gif3" class="gif3" src="../Encabezado/imagenesinterfaz/productos de miratr/bordebalnco3.jpg"
            alt="Girl in a jacket">
    </div><br><br>
    <div class="contenedor_venta">
        <h1>Lo Mejor De Nosotros</h1>
        <section>
            <div class="contenedor_opciones">
                <span class="active">&nbsp;&nbsp;&nbsp;&nbsp;DESCUENTOS&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <div class="contenedor_productos">
            <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM interfaz WHERE id = 1");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>



<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM interfaz WHERE id = 2");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM interfaz WHERE id = 3");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM interfaz WHERE id = 4");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

            </div>

            <div class="contenedor_opciones">
                <span class="active">&nbsp;&nbsp;&nbsp;&nbsp;APUNTO DE AGOTARSE&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <div class="contenedor_productos">
            <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM interfaz WHERE id = 5");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>



<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM interfaz WHERE id = 6");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM interfaz WHERE id = 7");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM interfaz WHERE id = 8");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

            </div>
        </section>
        <h1>En Temporada</h1><br>
        <div class="holi">
            <img class="video11" src="../Encabezado/videos interfaz/video1.gif" alt="video1">
            <img class="video22" src="../Encabezado/videos interfaz/video2.gif" alt="video2">
            <img class="video33" src="../Encabezado/videos interfaz/video3.gif" alt="video3">
        </div><br><br>
        <h1>Los Mas Buscados</h1>
        <div class="buscados">
            <a class="buscador" href="https://www.mozilla.org/es-ES/">| Disney |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Spider-Man |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Nike |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Blancos |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Tacones |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Sanrio |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Osos |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Mcquin |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Tenis |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Botas |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Estiantil |&nbsp;&nbsp;</a>
            <a class="buscador" href="https://www.mozilla.org/es-ES/">Convers |&nbsp;&nbsp;</a>
        </div><br>
        <h2>Tenis</h2><br>
        <div class="holiimagenes">
            <img class="imagen1" src="../Encabezado/imagenesinterfaz/productos/tenis/negro.jpg" alt="imagen1">
            <img class="imagen2" src="../Encabezado/imagenesinterfaz/productos/tenis/blancos.jpg" alt="imagen2">
            <img class="imagen3" src="../Encabezado/imagenesinterfaz/productos/tenis/descargar (6).jpg" alt="imagen3">
            <img class="imagen4" src="../Encabezado/imagenesinterfaz/productos/tenis/descargar (5).jpg" alt="imagen4">
            <img class="imagen5" src="../Encabezado/imagenesinterfaz/productos/tenis/pequeños.jpg" alt="imagen5">
        </div><br>
        <h2>Tacones</h2><br>
        <div class="holiimagenes">
            <img class="imagen7" src="../Encabezado/imagenesinterfaz/productos/tacones/aaaaaa.jpg" alt="imagen1">
            <img class="imagen8" src="../Encabezado/imagenesinterfaz/productos/tacones/descargar (3).jpg" alt="imagen2">
            <img class="imagen9" src="../Encabezado/imagenesinterfaz/productos/tacones/descargar (5).jpg" alt="imagen3">
            <img class="imagen10" src="../Encabezado/imagenesinterfaz/productos/tacones/descargar (4).jpg"
                alt="imagen4">
            <img class="imagen11" src="../Encabezado/imagenesinterfaz/productos/tacones/xdxd.jpg" alt="imagen5">
        </div><br>
        <h2>Niños</h2><br>
        <div class="holiimagenes">
            <img class="imagen13" src="../Encabezado/imagenesinterfaz/productos/niños/des1.jpg" alt="imagen1">
            <img class="imagen14" src="../Encabezado/imagenesinterfaz/productos/niños/descargar (4).jpg" alt="imagen2">
            <img class="imagen15" src="../Encabezado/imagenesinterfaz/productos/niños/des3.jpg" alt="imagen3">
            <img class="imagen16" src="../Encabezado/imagenesinterfaz/productos/niños/des4.jpg" alt="imagen4">
            <img class="imagen17" src="../Encabezado/imagenesinterfaz/productos/niños/descargar (3).jpg" alt="imagen5">
        </div><br>
    </div><br>
    </div><br>
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------HOMBRES----------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    </header>
    <h1 id="hombre">Hombres</h1>
    <div class="imagen_principalhombre">
    </div>
    <div class="barra_separacion">
        <h1 id="loultimo1">LO ULTIMO</h1>
    </div>
<div class="contenedor_productos4">

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 1");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 2");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 3");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 4");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!-------------------------------------------------------------!!!!!!ULTIMAS EXISTENCIAS!!!!!------------------------------------------------------------------------------------------------------------------------------>
    <div class="barra_separacion">
        <h1 id="ultimas1">ULTIMAS EXISTENCIAS</h1>
    </div>
    <div class="imagen_secundariahombre">
    </div>
    <div class="contenedor_productos4">

        <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 5");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 6");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 7");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 8");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos4">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 9");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 10");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 11");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 12");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!Formal!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <div class="barra_separacion">
        <h1>OTROS</h1>
    </div>
    <h1 id="formal1" class="tenis">FORMAL</h1>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 13");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 14");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 15");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 16");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 17");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 18");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 19");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 20");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 21");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 22");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 23");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 24");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 25");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 26");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 27");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 28");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!CASUALES!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="casual1" class="tenis">CASUAL</h1>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 29");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 30");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 31");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 32");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 33");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 34");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 35");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 36");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>

    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 37");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 38");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 39");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 40");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 41");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 42");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 43");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 44");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!DEPORTIVOS!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="deportivo1" class="tenis">DEPORTIVO</h1>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 45");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 46");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 47");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 48");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


    </div>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 49");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 50");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 51");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 52");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


    </div>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 53");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 54");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 55");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 56");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
<div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 57");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 58");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 59");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 60");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>

<div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 61");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 62");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 63");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 64");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!SANDALIAS!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="sandalias1" class="tenis">SANDALIAS</h1>
    <div class="contenedor_productos5">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 65");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 66");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 67");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo = mysqli_query($Mienlace, "SELECT * FROM hombre WHERE id = 68");
$row = mysqli_fetch_assoc($loultimo);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    </div><br><br>
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------MUJERES----------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <h1 id="mujer">MUJER</h1>
    <div class="imagen_principalmujer">
    </div>
    <div class="barra_separacion">
        <h1 id="loultimo2">LO ULTIMO</h1>
    </div>
    <div class="contenedor_productos7">

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 1");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);


if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 2");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 3");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 4");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!-------------------------------------------------------------!!!!!!ULTIMAS EXISTENCIAS!!!!!------------------------------------------------------------------------------------------------------------------------------>
    <div class="barra_separacion">
        <h1 id="ultimas2">ULTIMAS EXISTENCIAS</h1>
    </div>
    <div class="imagen_secundariamujer">
    </div>
    <div class="contenedor_productos7">

        <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 5");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 6");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 7");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 8");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos7">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 9");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 10");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 11");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 12");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!Formal!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <div class="barra_separacion">
        <h1>OTROS</h1>
    </div>
    <h1 id="formal2" class="tenis">FORMAL</h1>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 13");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 14");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 15");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 16");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 17");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 18");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 19");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 20");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 21");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 22");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 23");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 24");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 25");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 26");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 27");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 28");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!CASUALES!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="casual2" class="tenis">CASUAL</h1>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 29");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 30");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 31");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 32");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 33");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 34");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 35");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 36");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>

    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 37");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 38");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 39");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 40");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 41");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 42");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 43");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 44");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!DEPORTIVOS!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="deportivo2" class="tenis">DEPORTIVO</h1>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 45");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 46");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 47");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 48");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


    </div>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 49");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 50");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 51");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 52");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


    </div>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 53");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 54");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 55");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 56");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
<div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 57");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 58");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 59");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 60");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>

<div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 61");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 62");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 63");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 64");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!SANDALIAS!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="sandalias2" class="tenis">SANDALIAS</h1>
    <div class="contenedor_productos8">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 65");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 66");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 67");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo2 = mysqli_query($Mienlace, "SELECT * FROM mujer WHERE id = 68");
$row = mysqli_fetch_assoc($loultimo2);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    </div><br><br>
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------NIÑOS------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <h1 id="niños">Niños</h1>
    <div class="imagen_principalniños">
    </div>
    <div class="barra_separacion">
        <h1>LO ULTIMO</h1>
    </div>
    <div class="contenedor_productos9">

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 1");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);


if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 2");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 3");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 4");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!-------------------------------------------------------------!!!!!!ULTIMAS EXISTENCIAS!!!!!------------------------------------------------------------------------------------------------------------------------------>
    <div class="barra_separacion">
        <h1 id="ultimas1">ULTIMAS EXISTENCIAS</h1>
    </div>
    <div class="imagen_secundarianinos">
    </div>
    <div class="contenedor_productos9">

        <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 5");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 6");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 7");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 8");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos9">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 9");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 10");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 11");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 12");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!Formal!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <div class="barra_separacion">
        <h1>OTROS</h1>
    </div>
    <h1 id="formal3" class="tenis">FORMAL</h1>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 13");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 14");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 15");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 16");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 17");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 18");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 19");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 20");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 21");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 22");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 23");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 24");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 25");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 26");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 27");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 28");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!CASUALES!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="casual3" class="tenis">CASUAL</h1>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 29");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 30");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 31");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 32");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 33");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 34");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 35");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 36");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>

    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 37");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 38");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 39");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 40");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 41");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 42");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 43");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 44");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!DEPORTIVOS!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="deportivo3" class="tenis">DEPORTIVO</h1>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 45");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 46");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 47");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 48");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


    </div>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 49");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 50");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 51");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 52");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


    </div>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 53");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 54");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 55");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 56");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
<div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 57");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 58");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 59");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 60");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>

<div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 61");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 62");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 63");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 64");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!SANDALIAS!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="sandalias3" class="tenis">SANDALIAS</h1>
    <div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 65");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 66");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 67");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo3 = mysqli_query($Mienlace, "SELECT * FROM ninos WHERE id = 68");
$row = mysqli_fetch_assoc($loultimo3);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    </div><br><br>
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------NIÑAS----------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <h1 id="niñas">NIÑAS</h1>
    <div class="imagen_principalniñas">
    </div>
    <div class="barra_separacion">
        <h1>LO ULTIMO</h1>
    </div>
    <div class="contenedor_productos11">

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 1");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);


if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>
        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 2");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 3");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 4");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!-------------------------------------------------------------!!!!!!ULTIMAS EXISTENCIAS!!!!!------------------------------------------------------------------------------------------------------------------------------>
    <div class="barra_separacion">
        <h1 id="ultimas1">ULTIMAS EXISTENCIAS</h1>
    </div>
    <div class="imagen_secundarianinas">
    </div>
    <div class="contenedor_productos11">

        <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 5");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 6");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 7");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 8");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos11">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 9");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 10");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 11");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 12");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!Formal!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <div class="barra_separacion">
        <h1>OTROS</h1>
    </div>
    <h1 id="formal4" class="tenis">FORMAL</h1>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 13");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 14");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 15");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 16");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 17");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 18");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 19");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 20");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 21");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 22");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 23");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 24");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 25");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 26");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 27");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 28");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!CASUALES!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="casual4" class="tenis">CASUAL</h1>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 29");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 30");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 31");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 32");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 33");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 34");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 35");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 36");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>

    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 37");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 38");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 39");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 40");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 41");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 42");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 43");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 44");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!DEPORTIVOS!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="deportivo4" class="tenis">DEPORTIVO</h1>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 45");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 46");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 47");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 48");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


    </div>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 49");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 50");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 51");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 52");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


    </div>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 53");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 54");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 55");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 56");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
<div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 57");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 58");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 59");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 60");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>

<div class="contenedor_productos10">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 61");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 62");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 63");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 64");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    </div>
    <!--+++++++++++++++++++++++++++++++++++++++!!!!!!!!!!!!SANDALIAS!!!!!!!!!++++++++++++++++++++++++++++++++++++++-->
    <h1 id="sandalias4" class="tenis">SANDALIAS</h1>
    <div class="contenedor_productos12">
    <?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 65");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 66");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 67");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>


<?php
require_once("conexion.php");
$Mienlace = Conexion();
$loultimo4 = mysqli_query($Mienlace, "SELECT * FROM ninas WHERE id = 68");
$row = mysqli_fetch_assoc($loultimo4);
$imagen=substr($row["imagen"], 3);

if ($row) {
    echo "<div class='card_productos'>
            <div class='contenedor_imagenes'>
                <span id='discount' name='discount' class='discount'>Queda{$row["existencias"]}</span>
                <span id='tallas' name='tallas' class='tallas' data='+' contect='{$row["talla1"]}'></span>
                <span id='tallas2' name='tallas2' class='tallas2' data='+' contect='{$row["talla2"]}'></span>
                <span id='tallas3' name='tallas3' class='tallas3' data='+' contect='{$row["talla3"]}'></span>
                <span id='colores' name='colores' class='colores' data='colores' contect='{$row["colores"]}'></span>
                <img id='img1' name='img1' class='img1' src='$imagen' alt='Zapatos Spider-Man'>
            </div>
            <div class='contenido_producto'></div>
            <h3 id='nombrez' name='nombrez'>{$row["nombre"]}</h3>
            <p id='precio' name='precio' class='precio'>{$row["precio"]}<span></span></p>

        </div>";
}
?>

</div>
    </div><br><br>

    <footer class="terminos">
        <h1>Sobre Nosotros</h1>
        <p class="p1">La actividad que desarrolla una zapatería es la venta de calzado,
            complementos y artículos de piel, que se comercializan en varias
            líneas (calzado para mujer, calzado para hombre, calzado infantil,
            complementos como bolsos, cinturones, etc.). El mercado de
            distribución de moda (ropa y calzado) ha evolucionado en las
            últimas décadas pasando de ser productos elitistas a un consumo
            masivo (en España los ciudadanos consumen una media de 3,5
            pares de calzado al año según datos de la Federación de Industria
            del Calzado Español). El saber adaptarse a la evolución del
            mercado será clave en la supervivencia de un negocio no carente
            de amenazas, pero que presenta una serie de interesantes
            oportunidades que se pueden aprovechar si se conoce bien el
            negocio (p.e. por haber trabajado antes en una zapatería), se sabe
            atender de forma adecuada a los clientes y se tiene una firme
            vocación de empresario.
            Dentro de las pautas de actuación recomendables a seguir por
            este tipo de negocio destacan la adaptación de la oferta a las
            necesidades de los clientes, la exposición de los artículos en el
            escaparate y dentro de la tienda (de modo que todo esté
            perfectamente ordenado para que la búsqueda de los distintos
            modelos y números sea fácil y rápida) y la planificación de las
            compras y el almacenamiento de los artículos de modo que éstos
            no se estropeen. También es fundamental que los artículos de
            lenta rotación sean los mínimos posibles (lo cual se conseguirá
            mediante las oportunas ofertas a los clientes).</p><br><br>
        <a class="pagina" href="https://www.mozilla.org/es-ES/">|Buscador de tiendas|&nbsp;&nbsp;</a>
        <a class="pagina" href="https://www.mozilla.org/es-ES/">Devoluciones|&nbsp;&nbsp;</a>
        <a class="pagina" href="https://www.mozilla.org/es-ES/">Mapa del Sitio|&nbsp;&nbsp;</a><br>
        <a class="pagina" href="https://www.mozilla.org/es-ES/">Dudas Frecuentes|&nbsp;&nbsp;</a>
        <a class="pagina" href="https://www.mozilla.org/es-ES/">Pagos|&nbsp;&nbsp;</a>
        <a class="pagina" href="https://www.mozilla.org/es-ES/">Guia Tallas|&nbsp;&nbsp;</a>
    </footer>
</body>

</html>