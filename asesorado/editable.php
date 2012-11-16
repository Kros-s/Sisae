<?php
if(isset($_REQUEST['welcome']))
{
	conect_database();
}

function conect_database()
{
	$usuario = $_REQUEST['txt_user'];
	$contrasena = $_REQUEST['txt_pass'];
//conecto con la base de datos
$conn = mysql_connect("localhost","root","");
//selecciono la BDD
mysql_select_db("sisae",$conn);


$ssql = "SELECT * FROM asesorusuario WHERE idAsesor = '$usuario' and clave = '$contrasena'";


$rs = mysql_query($ssql,$conn);


if (mysql_num_rows($rs)!=0){

 //  $_SESSION['user'] = "$usuario";
    header ("Location: prototype.php");
}else {

    header("Location: prototype.php?errorusuario=si");
}
mysql_free_result($rs);
mysql_close($conn);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asesores | SISAE</title>
<link href="../css/index.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div id="gral">
<div id="Header"><div id="header2">
  <div id="con_ini">Bievenido a el Sistema de Asesores Estudientes</div>
  <div id="sesion"><a href="#">Cerrar Sesion</a></div><div class="clr"></div>
  </div><div id="head_img">
  <h2 class="bco"><img src="../icos/businesswoman_man.png" alt="SISAE" width="128" height="128" align="middle" />SISTEMA DE ASESORADOS BIENVENIDO <img src="../icos/businessman_woman.png" alt="SISAE" width="128" height="128" align="middle" /></h2>
</div>
</div>
<div id="container">
  <div id="Ajax_API">Dentro de esta parte podras encontrar toda la parte que es necesaria para realizar tus Asesorias.</div>
  <div id="contTleft">
       <form id="form1" name="form1" method="post" action="<?php $PHP_SELF ?>">
        <fieldset>
         <table align="center">
          <legend class="w">SISAE</legend>
          <p>
            <tr><td><label>Usuario:</label></td>
              <td><input name="txt_user" type="text" class="size" id="txt_user" /></td></tr>
            </p>
          <p>
            <tr><td><label>Contraseña:</label></td>
              <td><input name="txt_pass" type="password" class="size" id="txt_pass" /></td></tr>

          </p>
          <p>
            <tr>
              <td><input type="hidden" name="welcome" id="welcome" /></td><td><input type="submit" name="button" id="button" value="Entrar" /></td></tr>
          </p>
          </table>
        </fieldset>
      </form>
      <?php
      if(isset($_GET['errorusuario']))
      {
      	echo"<strong>ERROR DE USUARIO Y/o CONTRASEÑA</strong>";
      }
?>
 
</div><div id="contTRight">
  <h3>Menu de Ayuda</h3>
  <div class="line"></div>
  <p><img src="../icos/sample.png" alt="Ayuda" width="128" height="128" align="middle" />Nececitas Ayuda...?</p>
  <p>Dentro de Este espacio se te brindaran mayores opciones de <span class="bold">ayuda</span> que te permitiran entender como es que esta desarrollado este sistema facilitandote asi su uso.</p>
  <h3>¿Sobre qué quieres que escribamos?</h3><div class="line"></div>
  <p>El equipo de <span class="bold">SISAE</span> pone a tu disposición sus conocimientos. Si tienes   dudas o inquietudes sobre algunos de los tópicos que abordamos en este sitio   web, puedes ponerte en contacto con nosotros y trataremos de escribir sobre   ello.</p>
</div>
<br class="clr" /></div>
  <div id="footer"><div id="cont_foot">Inicio</div></div>
</div>
</body>
</html>
