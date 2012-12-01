<?php
session_start();
if(isset($_SESSION['user']))
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
<script type="text/javascript" src="../javascript/prototype.js"></script>
<script type="text/javascript" src="../javascript/ajax.js"></script>
<script type="text/javascript" src="../javascript/index_asesor.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>



<body>

<div id="gral">
<div id="Header"><div id="header2"><div id="con_ini"><?php if(isset($_SESSION['status']))
  {
	  echo"Has Iniciado Sesion Correctamente Bienvenido Al sistema Tu eres: <span class='bco'>" . $_SESSION['user'] . "</span>";
  }
  ?></div>
  <div id="sesion"><a href="../destroy.php">Cerrar Sesion</a></div><div class="clr"></div>
  </div><div id="head_img">
    <h2 class="bco"><img src="../icos/businesswoman_man.png" alt="SISAE" width="128" height="128" align="middle" />SISTEMA DE ASESOR BIENVENIDO <img src="../icos/businessman_woman.png" alt="SISAE" width="128" height="128" align="middle" /></h2>
</div>
</div>
<div id="container">
  <div id="Ajax_API">
    <label>
      <input type="image" name="editable_1" id="editable_1" src="../icos/notes_edit.png"/>
    </label>
    <label>
      <input name="horary" type="image" id="horary" src="../icos/add_link.png" alt="Agrega un Horario" />
    </label>
    <label>
      <input name="dayly" type="image" id="dayly" src="../icos/calendar_add.png" alt="Añadir Horario" />
    </label>
    <a href="help.php"><input name="info" type="image" id="info" title="Informacion"  src="../icos/businesswoman_info.png" alt="Ayuda" /></a>
  </div>
  <div id="contTleft">
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
