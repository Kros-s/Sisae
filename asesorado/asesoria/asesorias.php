<?php
session_start();
if(isset($_SESSION['usuario']))
{
	$var = "hola";
}
else
{
	header("Location: ../../index.html");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asesores | SISAE</title>
<link href="../../css/index.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="../../javascript/prototype.js"></script>
<script type="text/javascript" src="../../javascript/ajax.js"></script>
<script type="text/javascript" src="asesoria.js"></script>

<body>
<div id="gral">
<div id="Header"><div id="header2"><div id="con_ini">Bievenido a El sistema de Asesores Estudientes Marko</div>
  <div id="sesion"><a href="../../destroy.php">Cerrar Sesion</a></div><div class="clr"></div>
  </div><div id="head_img">
  <h2 class="bco"><img src="../../icos/businesswoman_man.png" alt="SISAE" width="128" height="128" align="middle" />SISTEMA DE ASESORADOS BIENVENIDO <img src="../../icos/businessman_woman.png" alt="SISAE" width="128" height="128" align="middle" /></h2>
</div>
</div>
<div id="container">
  <div id="Ajax_API">
    <h3>Aqui va la parte de Solicitar Asesoria
    </h3>
  </div>
  <div id="contTleft">
  <div id="formulario">
<form id="asesoria" name="asesoria" method="post" action="">
<p><span id="user2">
  <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['usuario']; ?>" /></span>
</p>
<p><span id="materiasDisp"></span></p>
<p><span id="AsesorMat"></span></p>
<p><span id="Horario"></span></p><br />
<input type="button" value="Solicitar Asesoria" name="called" id="called" />
</form>
</div>
</div><div id="contTRight">
  <h3>Menu de Ayuda</h3>
  <div class="line"></div>
  <p><img src="../../icos/sample.png" alt="Ayuda" width="128" height="128" align="middle" />Nececitas Ayuda...?</p>
  <p>Dentro de Este espacio se te brindaran mayores opciones de <span class="bold">ayuda</span> que te permitiran entender como es que esta desarrollado este sistema facilitandote asi su uso.</p>
  <h3>¿Sobre qué quieres que escribamos?</h3><div class="line"></div>
  <p>El equipo de <span class="bold">SISAE</span> pone a tu disposición sus conocimientos. Si tienes   dudas o inquietudes sobre algunos de los tópicos que abordamos en este sitio   web, puedes ponerte en contacto con nosotros y trataremos de escribir sobre   ello.</p>
</div>
<br class="clr" /></div>
  <div id="footer"><div id="cont_foot">Inicio</div></div>
</div>
</body>
</html>
