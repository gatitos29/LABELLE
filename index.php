<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="estilotablas.css">
    <link rel="shortcut icon" href="../logo.png">
</head>
<body>
<header>  
    <div class="barra">
            <div class="abrir" style="font-size:30px;cursor:pointer" onclick="navegador()">&#9776;</div>
            <div class="logo"><a href="../menu.html"></a></div> <!--NO BORRA, ES LA UBICACION DE ICONO DE LA CASA-->
            <div class="reg-log">
                <button class="registro" onclick="document.getElementById('registro').style.display='block'" style="width:auto;">Registrar</button>
                <div class="user"><a href="../Encabezado/login la belle/index.html"></a></div><!--NO BORRAR, ICONO DEL LOGUEO-->
            </div>
    </div>
</header>



<script>
    function valor(){
        var x = document.getElementById("imagen").value;
        console.log(x);
    }
</script>
<div id="registro" class="fondo">
    <form class="contenido-form animar" action="insert.php" method="post" enctype="multipart/form-data">
        <table class="">
            <tr>
                <td>
                    <label for="nombre-z"><b>nombre</b></label>
                    <input type="text" name="nombre">
                </td>
                <td>
                    <label for="precio"><b>precio</b></label>
                    <input type="text" name="precio">
                </td>
                <td>
                    <label for="existencias"><b>existencias</b></label>
                    <input type="text" name="existencias">
                </td>
                <td>
                    <label for="genero">genero</label>
                    <select name="genero">
                        <option value="ninas">interfaz</option>
                        <option value="hombre">Hombres</option>
                        <option value="mujer">Mujeres</option>
                        <option value="ninos">Niños</option>
                        <option value="ninas">Niñas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="talla"><b>tallas1</b></label>
                    <input type="text" name="talla1">
                </td>
                <td>
                    <label for="talla"><b>tallas2</b></label>
                    <input type="text" name="talla2">
                </td>
                <td>
                    <label for="talla"><b>tallas3</b></label>
                    <input type="text" name="talla3">
                </td>
                <td>
                    <label for="talla"><b>colores</b></label>
                    <input type="text" name="colores">
                </td>
                <td>
                    <label for="talla"><b>imagen</b></label>
                    <input type="file" name="imagen" id="imagen" onchange="valor()">
                </td>
        </table>

        <div class="contenedor-f" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('registro').style.display='none'" class="cancelbtn">Cancelar</button>
            <input type="hidden" name="imagen_actual" value="<?php echo htmlspecialchars($imagen_actual); ?>">
            <button type="submit" name="accion">Guardar</button>
        </div>
    </form>
</div>

<div id="cuenta" class="fondo">
    <form class="contenido-form animar" action="cuentas.php" method="post" enctype="multipart/form-data">
        <table class="">
            <tr>
                <td>
                    <label for="id"><b>identificacion</b></label>
                    <input type="text" name="id">
                </td>                
                <td>
                    <label for="nombre-u"><b>nombre y apellidos de la persona</b></label>
                    <input type="text" name="nombre-u">
                </td>
                <td>
                    <label for="contacto1"><b>contacto de la persona</b></label>
                    <input type="text" name="contacto1">
                </td>
                <td>
                    <label for="contacto2"><b>segundo contacto</b></label>
                    <input type="text" name="contacto2">
                </td>
                <td>
                    <label for="direccion"><b>direccion de la persona</b></label>
                    <input type="text" name="direccion">
                </td>
                <td>
                    <label for="rol">el rol del usuario</label>
                    <select name="rol">
                        <option value="2">empleado</option>
                        <option value="1">administrador</option>
                    </select>
                </td>
                <td>
                    <label for="eps"><b>la EPS de la persona</b></label>
                    <input type="text" name="eps">
                </td>
                <td>
                    <label for="rh"><b>tipo de sangre de la persona</b></label>
                    <input type="text" name="rh">
                </td>
                <td>
                    <label for="direccion"><b>la contraseña de la persona</b></label>
                    <input type="text" name="direccion">
                </td>
            </tr>
        </table>

        <div class="contenedor-f" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('cuenta').style.display='none'" class="cancelbtn">Cancelar</button>
            <button type="submit" name="accion">Guardar</button>
        </div>
    </form>
</div>

<div id="recibo" class="fondo">
    <form class="contenido-form animar" action="venta.php" method="post" enctype="multipart/form-data">
        <table class="">
            <tr>
                <td>
                    <label for="id-z"><b>ponga la id de el zapato</b></label>
                    <input type="number" name="id">
                </td>
                <td>
                <label for="genero">en que tabla esta?</label>
                    <select name="genero">
                        <option value="ninas">interfaz</option>
                        <option value="hombre">Hombres</option>
                        <option value="mujer">Mujeres</option>
                        <option value="ninos">Niños</option>
                        <option value="ninas">Niñas</option>
                    </select>
                </td>
                <td>
                    <label for="cantidad"><b>cuantos zapatos compro?</b></label>
                    <input type="text" name="cantidad">
                </td>
            </tr>
        </table>

        <div class="contenedor-f" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('recibo').style.display='none'" class="cancelbtn">Cancelar</button>
            <button type="submit" name="accion">Guardar</button>
        </div>
    </form>
</div>


<div class="tab">

<div id="navegador" class="navegador">
    <div>
        <a class="links" onclick="tablas(event, 'Empleados')" id="predeterminado">Empleados</a>

        <a class="links" onclick="tablas(event, 'usuarios')">usuarios</a>

        <a class="links" onclick="tablas(event, 'interfaz')">Interfaz</a>

        <a class="links" onclick="tablas(event, 'Hombres')">Z-Hombres</a>

        <a class="links" onclick="tablas(event, 'Mujer')">Z-Mujeres</a>

        <a class="links" onclick="tablas(event, 'Niños')">Z-Niños</a>

        <a class="links" onclick="tablas(event, 'Niñas')">Z-Niñas</a>
    </div>
    <div>
        <button class="links" onclick="document.getElementById('cuenta').style.display='block'" style="width:auto;">Registrar</button>
        <button class="links" onclick="document.getElementById('recibo').style.display='block'" style="width:auto;">Registrar</button>
    </div>
</div>

<div id="main" >
    
<?php
require_once("conexion.php");
$Mienlace=Conexion();
$hombre= mysqli_query($Mienlace,"select * from hombre");
$mujer= mysqli_query($Mienlace, "select * from mujer");
$niños= mysqli_query($Mienlace, "select * from ninos");
$niñas= mysqli_query($Mienlace, "select * from ninas");
$interfaz= mysqli_query($Mienlace, "select * from interfaz");
$empleados= mysqli_query($Mienlace, "select * from empleados");
$usuario= mysqli_query($Mienlace, "select * from usuarios");
?>
<div id="Empleados" class="contenido"><br>
        <h3 style="text-align:center;font-family: 'Times New Roman', Times, serif; font-size:xx-larger;height: 3%;
        width: 20%; border:2px solid black;position: relative;left: 40%; background-color: #000000; color:white;border-radius: 10px;">Empleados</h3>
        <p style="text-align:center; font-family: 'Times New Roman', Times, serif;">
    </p>
    <table border="1" cellspacing="3" cellpadding="2" style="margin:auto; text-align:center; color:black;" >
    <tr style="color:black;" >
    <td>&nbsp;Id_Empleado&nbsp;</td>
    <td>&nbsp;N_Empleado&nbsp;</td>
    <td>&nbsp;Contacto1_Empleado&nbsp;</td>
    <td>&nbsp;Contacto2_Empleado&nbsp;</td>
    <td>&nbsp;Direccion_Empleado&nbsp;</td>
    <td>&nbsp;Id_EPS&nbsp;</td>
    <td>&nbsp;Id_RH&nbsp;</td>
    <td>&nbsp;Contrasenia&nbsp;</td>
    </tr>
    
    <?php      
while ($row = mysqli_fetch_array($empleados)) {
    printf("<tr> 
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td> 
    </tr>",
    htmlspecialchars($row["Id_Empleado"]), 
    htmlspecialchars($row["N_Empleado"]), 
    htmlspecialchars($row["Contacto1_Empleado"]), 
    htmlspecialchars($row["Contacto2_Empleado"]), 
    htmlspecialchars($row["Direccion_Empleado"]), 
    htmlspecialchars($row["Id_EPS"]), 
    htmlspecialchars($row["Id_RH"]), 
    htmlspecialchars($row["Contrasenia"]), 
); 
}

mysqli_free_result($empleados);
?>
</table>

    </div>
<div id="usuarios" class="contenido"><br>
        <h3 style="text-align:center;font-family: 'Times New Roman', Times, serif; font-size:xx-larger;height: 3%;
        width: 20%; border:2px solid black;position: relative;left: 40%; background-color: #000000; color:white;border-radius: 10px;">Usuarios</h3>
        <p style="text-align:center; font-family: 'Times New Roman', Times, serif;">
    </p>
    <table border="1" cellspacing="3" cellpadding="2" style="margin:auto; text-align:center; color:black;" >
    <tr style="color:black;" >
    <td>&nbsp;User_Usuarios&nbsp;</td>
    <td>&nbsp;Email_Usuarios&nbsp;</td>
    <td>&nbsp;Contrasenia_Usuarios&nbsp;</td>
    </tr>
    
    <?php      
while ($row = mysqli_fetch_array($usuario)) {
    printf("<tr> 
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
    </tr>",
    htmlspecialchars($row["User_Usuarios"]), 
    htmlspecialchars($row["Email_Usuarios"]), 
    htmlspecialchars($row["Contrasenia_Usuarios"])
); 
}

mysqli_free_result($usuario);
?>
</table>

    </div>

    <div id="interfaz" class="contenido"><br>
    <h3 style="text-align:center;font-family: 'Times New Roman', Times, serif; font-size:xx-larger;height: 3%;
    width: 20%; border:2px solid black;position: relative;left: 40%; background-color: #000000; color:white;border-radius: 10px;">Interfaz</h3>
    <p style="text-align:center; font-family: 'Times New Roman', Times, serif;">Tenga en cuenta las siguientes recomendaciones a la hora de modificar:<br><br>
        1 es necesario añadir imagenes cuadradas en caso de no serlo por favor editarlas<br>
        2 los precios solo pueden ser valores numericos por favor no agregue letras<br>
        3 agregue los colores disponibles de esta forma |rojo|verde|etc| esto para asegurar el orden<br><br>
        Eso es todo disfruta de la pagina cualquier inconveniente llame a +57 345654987<br>
    </p>
    <table border="1" cellspacing="3" cellpadding="2" style="margin:auto; text-align:center; color:black;" >
    <tr style="color:black;" >
    <td>&nbsp;id&nbsp;</td>
    <td>&nbsp;nombre&nbsp;</td>
    <td>&nbsp;precio&nbsp;</td>
    <td>&nbsp;existencias&nbsp;</td>
    <td>&nbsp;talla1&nbsp;</td>
    <td>&nbsp;talla2&nbsp;</td>
    <td>&nbsp;talla3&nbsp;</td>
    <td>&nbsp;colores&nbsp;</td>
    <td>&nbsp;imagen&nbsp;</td>
    </tr>
    
    <?php      
while ($row = mysqli_fetch_array($interfaz)) {
    printf("<tr> 
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td><img src='%s' width='100px'></td>
        <td><a href=\"modificar.php?od=interfaz&id=%d\">Modificar</a></td> 
    </tr>",
    htmlspecialchars($row["id"]), 
    htmlspecialchars($row["nombre"]), 
    htmlspecialchars($row["precio"]), 
    htmlspecialchars($row["existencias"]), 
    htmlspecialchars($row["talla1"]), 
    htmlspecialchars($row["talla2"]), 
    htmlspecialchars($row["talla3"]), 
    htmlspecialchars($row["colores"]), 
    htmlspecialchars($row["imagen"]), 
    intval($row["id"])); 
}

mysqli_free_result($interfaz);
?>
</table>
</div>    

<div id="Hombres" class="contenido"><br>
    <h3 style="text-align:center;font-family: 'Times New Roman', Times, serif; font-size:xx-larger;height: 3%;
    width: 20%; border:2px solid black;position: relative;left: 40%; background-color: #000000; color:white;border-radius: 10px;">Hombres</h3>
    <p style="text-align:center; font-family: 'Times New Roman', Times, serif;">Tenga en cuenta las siguientes recomendaciones a la hora de modificar:<br><br>
        1 es necesario añadir imagenes cuadradas en caso de no serlo por favor editarlas<br>
        2 los precios solo pueden ser valores numericos por favor no agregue letras<br>
        3 agregue los colores disponibles de esta forma |rojo|verde|etc| esto para asegurar el orden<br><br>
        Eso es todo disfruta de la pagina cualquier inconveniente llame a +57 345654987<br>
    </p>
    <table class="tablass" border="1" cellspacing="3" cellpadding="2" style="margin:auto; text-align:center; color:black;">
    <tr style="color:black;" >
    <td>&nbsp;id&nbsp;</td>
    <td>&nbsp;nombre&nbsp;</td>
    <td>&nbsp;precio&nbsp;</td>
    <td>&nbsp;existencias&nbsp;</td>
    <td>&nbsp;talla1&nbsp;</td>
    <td>&nbsp;talla2&nbsp;</td>
    <td>&nbsp;talla3&nbsp;</td>
    <td>&nbsp;colores&nbsp;</td>
    <td>&nbsp;imagen&nbsp;</td>
    </tr>
    
    <?php      
while ($row = mysqli_fetch_array($hombre)) {
    printf("<tr> 
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td><img src='%s' width='100px'></td>
        <td><a href=\"modificar.php?od=hombre&id=%d\">Modificar</a></td> 
    </tr>",
    htmlspecialchars($row["id"]), 
    htmlspecialchars($row["nombre"]), 
    htmlspecialchars($row["precio"]), 
    htmlspecialchars($row["existencias"]), 
    htmlspecialchars($row["talla1"]), 
    htmlspecialchars($row["talla2"]), 
    htmlspecialchars($row["talla3"]), 
    htmlspecialchars($row["colores"]), 
    htmlspecialchars($row["imagen"]), 
    intval($row["id"])); 
}

mysqli_free_result($hombre);
?>
</table>
</div>

    <div id="Mujer" class="contenido"><br>
        <h3 style="text-align:center;font-family: 'Times New Roman', Times, serif; font-size:xx-larger;height: 3%;
    width: 20%; border:2px solid black;position: relative;left: 40%; background-color: #000000; color:white;border-radius: 10px;">Mujeres</h3>
        <p style="text-align:center; font-family: 'Times New Roman', Times, serif;">Tenga en cuenta las siguientes recomendaciones a la hora de modificar:<br><br>
        1 es necesario añadir imagenes cuadradas en caso de no serlo por favor editarlas<br>
        2 los precios solo pueden ser valores numericos por favor no agregue letras<br>
        3 agregue los colores disponibles de esta forma |rojo|verde|etc| esto para asegurar el orden<br><br>
        Eso es todo disfruta de la pagina cualquier inconveniente llame a +57 345654987<br>
    </p>
        <table border="1" cellspacing="3" cellpadding="2" style="margin:auto; text-align:center; color:black;" >
    <tr style="color:black;" >
        <td>&nbsp;id&nbsp;</td>
        <td>&nbsp;nombre&nbsp;</td>
        <td>&nbsp;precio&nbsp;</td>
        <td>&nbsp;existencias&nbsp;</td>
        <td>&nbsp;talla1&nbsp;</td>
        <td>&nbsp;talla2&nbsp;</td>
        <td>&nbsp;talla3&nbsp;</td>
        <td>&nbsp;colores&nbsp;</td>
        <td>&nbsp;imagen&nbsp;</td>
        
    </tr>
    
<?php      
    while($row = mysqli_fetch_array($mujer)) {
    printf("<tr> 
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td><img src='%s' width='100px'></td>
        <td><a href=\"modificar.php?od=mujer&id=%d\">Modificar</a></td> 
    </tr>",
    htmlspecialchars($row["id"]), 
    htmlspecialchars($row["nombre"]), 
    htmlspecialchars($row["precio"]), 
    htmlspecialchars($row["existencias"]), 
    htmlspecialchars($row["talla1"]), 
    htmlspecialchars($row["talla2"]), 
    htmlspecialchars($row["talla3"]), 
    htmlspecialchars($row["colores"]), 
    htmlspecialchars($row["imagen"]), 
    intval($row["id"])); 
}


mysqli_free_result($mujer);
?>
</table>
    </div>

    <div id="Niños" class="contenido"><br>
        <h3 style="text-align:center;font-family: 'Times New Roman', Times, serif; font-size:xx-larger;height: 3%;
    width: 20%; border:2px solid black;position: relative;left: 40%; background-color: #000000; color:white;border-radius: 10px;">Niños</h3>
        <p style="text-align:center; font-family: 'Times New Roman', Times, serif;">Tenga en cuenta las siguientes recomendaciones a la hora de modificar:<br><br>
        1 es necesario añadir imagenes cuadradas en caso de no serlo por favor editarlas<br>
        2 los precios solo pueden ser valores numericos por favor no agregue letras<br>
        3 agregue los colores disponibles de esta forma |rojo|verde|etc| esto para asegurar el orden<br><br>
        Eso es todo disfruta de la pagina cualquier inconveniente llame a +57 345654987<br>
    </p>
        <table border="1" cellspacing="3" cellpadding="2" style="margin:auto; text-align:center; color:black;" >
    <tr style="color:black;" >
        <td>&nbsp;id&nbsp;</td>
        <td>&nbsp;nombre&nbsp;</td>
        <td>&nbsp;precio&nbsp;</td>
        <td>&nbsp;existencias&nbsp;</td>
        <td>&nbsp;talla1&nbsp;</td>
        <td>&nbsp;talla2&nbsp;</td>
        <td>&nbsp;talla3&nbsp;</td>
        <td>&nbsp;colores&nbsp;</td>
        <td>&nbsp;imagen&nbsp;</td>
        
    </tr>
    
<?php      
    while($row = mysqli_fetch_array($niños)) {
    printf("<tr> 
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td><img src='%s' width='100px'></td>
        <td><a href=\"modificar.php?od=ninos&id=%d\">Modificar</a></td> 
    </tr>",
    htmlspecialchars($row["id"]), 
    htmlspecialchars($row["nombre"]), 
    htmlspecialchars($row["precio"]), 
    htmlspecialchars($row["existencias"]), 
    htmlspecialchars($row["talla1"]), 
    htmlspecialchars($row["talla2"]), 
    htmlspecialchars($row["talla3"]), 
    htmlspecialchars($row["colores"]), 
    htmlspecialchars($row["imagen"]), 
    intval($row["id"])); 
}

mysqli_free_result($niños);
?>
</table>
    </div>
    
    <div id="Niñas" class="contenido"><br>
        <h3 style="text-align:center;font-family: 'Times New Roman', Times, serif; font-size:xx-larger;height: 3%;
    width: 20%; border:2px solid black;position: relative;left: 40%; background-color: #000000; color:white;border-radius: 10px;">Niñas</h3>
        <p style="text-align:center; font-family: 'Times New Roman', Times, serif;">Tenga en cuenta las siguientes recomendaciones a la hora de modificar:<br><br>
        1 es necesario añadir imagenes cuadradas en caso de no serlo por favor editarlas<br>
        2 los precios solo pueden ser valores numericos por favor no agregue letras<br>
        3 agregue los colores disponibles de esta forma |rojo|verde|etc| esto para asegurar el orden<br><br>
        Eso es todo disfruta de la pagina cualquier inconveniente llame a +57 345654987<br>
    </p>
        <table border="1" cellspacing="3" cellpadding="2" style="margin:auto; text-align:center; color:black;" >
            <tr style="color:black;" >
                <td>&nbsp;id&nbsp;</td>
                <td>&nbsp;nombre&nbsp;</td>
                <td>&nbsp;precio&nbsp;</td>
                <td>&nbsp;existencias&nbsp;</td>
                <td>&nbsp;talla1&nbsp;</td>
                <td>&nbsp;talla2&nbsp;</td>
                <td>&nbsp;talla3&nbsp;</td>
                <td>&nbsp;colores&nbsp;</td>
                <td>&nbsp;imagen&nbsp;</td>
                
            </tr>
            
<?php      
    while($row = mysqli_fetch_array($niñas)) {
    printf("<tr> 
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td><img src='%s' width='100px'></td>
        <td><a href=\"modificar.php?od=ninas&id=%d\">Modificar</a></td> 
    </tr>",
    htmlspecialchars($row["id"]), 
    htmlspecialchars($row["nombre"]), 
    htmlspecialchars($row["precio"]), 
    htmlspecialchars($row["existencias"]), 
    htmlspecialchars($row["talla1"]), 
    htmlspecialchars($row["talla2"]), 
    htmlspecialchars($row["talla3"]), 
    htmlspecialchars($row["colores"]), 
    htmlspecialchars($row["imagen"]), 
    intval($row["id"])); 
}


mysqli_free_result($niñas);
?>
 </table>
</div>
</div>


</body>
<script>
let x=0
function navegador() {
    if(x==0){
        document.getElementById("navegador").style.width = "180px";
        document.getElementById("main").style.marginLeft = "180px";
        x=0+1
    }else{
        document.getElementById("navegador").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        x=0
    }
}

var fondo = document.getElementById('registro');

window.onclick = function(event) {
    if (event.target == fondo) {
        fondo.style.display = "none";
    }
}

var fondo2 = document.getElementById('cuenta');

window.onclick = function(event) {
    if (event.target == fondo2) {
        fondo.style.display = "none";
    }
}

var fondo3 = document.getElementById('recibo');

window.onclick = function(event) {
    if (event.target == fondo3) {
        fondo.style.display = "none";
    }
}

function tablas(evt, Name) {
    var i, contenido, links;
    contenido = document.getElementsByClassName("contenido");

    for (i = 0; i < contenido.length; i++) {
        contenido[i].style.display = "none";
    }

    links = document.getElementsByClassName("links");
    for (i = 0; i < links.length; i++) {
        links[i].className = links[i].className.replace(" active", "");
    }

    document.getElementById(Name).style.display = "block";
    evt.currentTarget.className += " active";
}

document.getElementById("predeterminado").click();
</script>
   
</html> 