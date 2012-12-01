<?php
session_start();
if(isset($_REQUEST['welcome']))
{
	conect_database();
}

function conect_database()
{
	$usuario = $_REQUEST['txt_user'];
	$contrasena = md5($_REQUEST['txt_pass']);
	include("../BD/BD.php");
	$rs = $bd->Execute("SELECT * FROM usuarioalumno WHERE IdAlumno = '$usuario' and clave = '$contrasena'");	
	
	if (!empty($rs))
	{
		foreach ($rs as $row) {
			$_SESSION['usuario'] = $row['IdAlumno'];	
		}		
		header ("Location: index.php");
	}else {
	
	    header("Location: login.php?errorusuario=si");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asesores | SISAE</title>
<link href="../css/index.css" rel="stylesheet" type="text/css" />
<link href="../css/login.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div id="gral">
<div id="Header"><div id="header2">
  <div id="con_ini">Bievenido a el Sistema de Asesores Estudientes</div>
  <div id="sesion"><a href="#">Inicio de Sesion</a></div><div class="clr"></div>
  </div><div id="head_img">
  <h2 class="bco"><img src="../icos/businesswoman_man.png" alt="SISAE" width="128" height="128" align="middle" />SISTEMA DE ASESORADOS BIENVENIDO <img src="../icos/businessman_woman.png" alt="SISAE" width="128" height="128" align="middle" /></h2>
</div>
</div>
<div id="container">
  <div id="Ajax_API"><?php if(isset($_GET['intento']))
  {
	  
	  echo"<h3 class='red'>Necesitas Loguearte para Poder Acceder a Todas las Funciones de SISAE's</h3>";
  }
  ?><div class="line"></div>
 </div>
  <div id="contTleft">
  <h3>INICIO DE SESION USUARIO</h3><div class="line"></div>
       <form id="form1" name="form1" method="post" action="<?php $PHP_SELF ?>">
        
         <table align="center">
        
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
              <td><input type="hidden" name="welcome" id="welcome" /></td><td><input  class="button" type="submit" name="button" id="button" value="Entrar" /></td></tr>
          </p>
          </table>
       
      </form>
      <?php
      if(isset($_GET['errorusuario']))
      {
      	echo"<strong>Datos invalidos por favor intenta de Nuevo</strong>";
      }
?>
 
</div><div id="contTRight">
  <h3>Inicio de Sesion</h3>
  <div class="line"></div>
  <p><img src="../icos/key.png" alt="Ayuda" width="128" height="128" align="middle" />Inicia Sesion</p>
  <p>Para poder tener acceso a todos los privilegios de Sisae Neceitas Registrarte e Iniciar Sesion No esperes mas <span class="bold">Pruebalo Ya...!</span></p>
  <h3>¿Sobre qué quieres que escribamos?</h3><div class="line"></div>
  <p>El equipo de <span class="bold">SISAE</span> pone a tu disposición sus conocimientos. Si tienes   dudas o inquietudes sobre algunos de los tópicos que abordamos en este sitio   web, puedes ponerte en contacto con nosotros y trataremos de escribir sobre   ello.</p>
</div>
<br class="clr" /></div>
  <div id="footer"><div id="cont_foot">Inicio</div></div>
</div>
</body>
</html>
