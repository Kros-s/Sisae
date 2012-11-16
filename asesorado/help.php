<?php
session_start();
if(isset($_SESSION['usuario']))
{
	$_SESSION['status'] = "yes";
}
else{
	header("Location: login.php?intento=true");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asesores | SISAE</title>
<link href="../css/index.css" rel="stylesheet" type="text/css" />

<link href="../css/asesorias.css" rel="stylesheet" type="text/css" />
</head>


<body>

<div id="gral">
<div id="Header"><div id="header2"><div id="con_ini"><?php if(isset($_SESSION['status']))
  {
	  echo"Has Iniciado Sesion Correctamente Bienvenido Al sistema Tu eres: <span class='bco'>" . $_SESSION['usuario'] . "</span>";
  }
  ?></div>
  <div id="sesion"><a href="../destroy.php">Cerrar Sesion</a></div><div class="clr"></div>
  </div><div id="head_img">
    <h2 class="bco"><img src="../icos/businesswoman_man.png" alt="SISAE" width="128" height="128" align="middle" />SISTEMA DE ASESORADOS BIENVENIDO <img src="../icos/businessman_woman.png" alt="SISAE" width="128" height="128" align="middle" /></h2>
</div>
</div>
<div id="container">
  <div id="Ajax_API">
    <h3>AYUDA PARA EL SISTEMA SISAE</h3>
    <p>Algunas Capturas de Pantalla </p>
    <p><img src="../images/estudiar.jpg" width="400" height="300" alt="Ayuda" /></p></div>
    <div>
    <p><img src="../img/index.png" width="927" height="773" alt="iNICIO" /></p>
    <p>&nbsp;</p>
    <p><img src="../img/REGISTER.png" width="967" height="822" alt="REGISTER" /></p>
    <p><img src="../img/sesion.png" width="927" height="773" alt="inicia" /></p>
    <p><img src="../img/inicio.png" width="975" height="708" alt="SESION" /></p>
    <p><img src="../img/MENU_ALUMNO.png" width="951" height="844" alt="MENU" /></p>
    <p><img src="../img/ALUMNO-STAT.png" width="964" height="773" alt="menu1" /></p>
    <p><img src="../img/ASESORIA.png" width="937" height="569" alt="ASESORIA" /></p>
  </div>
  <div id="contTleft" style="visibility:hidden;"> 
  <h3>Bienvenido a Sisae Sistema para Asesorados</h3>
  <div class="line"></div>
  <p>Dentro de este pequeño sistema podras encontrar varias opciones las cuales te podran ayudar a entender este sistema</p>
  <p>La primera Modalida que podras ver sera la de solicitar una asesoria con un Asesor que al igual que tu posee una cuenta.</p>
  <p>Este sistema tiene como intencion facilitarte el acceso a las asesorias y tener un mayor control de tus asesorias para asi poder verlas de manera mucho mas sencilla.</p>
  <p>Algunas opciones recientes que tendras en tu cuenta seran las siguientes:</p>
  <ul>
    <li>Accesibilidad de Cuenta</li>
    <li>Mayor control de Tus Asesorias</li>
    <li>Facilidad para Saber que asesor imparte que Materia</li>
    <li>Calificacion de Asesoria</li>
    </ul>
  <h3>Evaluacion de Asesores</h3>
<div class="line"></div>
<p>La forma de obtener una asesoria sera la siguiente mediante el boton de Asesoria que tendremos ubicado en la parte superior del sistema.</p>
</div><div id="contTRight" style="visibility:hidden;">
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
