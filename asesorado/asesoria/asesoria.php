<?php
session_start();
$_SESSION['usuario'] = "marko";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asesoria | SISAE</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/asesor/asesoria.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="../js/prototype.js"></script>
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="asesoria.js"></script>
<body>

<div id="page">
  <div id="header">
    <div class="extra" id="headercito">SISTEMA DE ASESORIA</div>
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
</div>
</div>
</body>
</html>
