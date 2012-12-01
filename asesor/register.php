
<?php
if(isset($_REQUEST['welcome']))
{
	if(($_REQUEST['nombre'] != "") && ($_REQUEST['ap_paterno'] != "") && ($_REQUEST['ap_materno'] != "") && ($_REQUEST['bol'] != "") && ($_REQUEST['correo'] != "") && ($_REQUEST['user'] != "") && ($_REQUEST['contra'] != "" ))
	{
		conect_database();	
	}else{
		header("Location: register.php?datos=false");
	}
}

function conect_database()
{
	include ("../BD/BD.php");
	$nombre = $_REQUEST['nombre'];
	$paterno = $_REQUEST['ap_paterno'];
	$materno = $_REQUEST['ap_materno'];
	$boleta = $_REQUEST['bol'];
	$correo = $_REQUEST['correo'];
	$user = $_REQUEST['user'];
	$contra =  md5($_REQUEST['contra']);//PARA ENCRIPTAR LA CONTRASEÑA....
	// ALTERANDO CODIGO MUAHAHAHA !!
	$data = $bd->Execute("SELECT * FROM `sisae`.`asesorusuario` WHERE IdAsesor = '$user'");	
	if(emty($data))//no existe
	{
		$rs = $bd->Upload("INSERT INTO `sisae`.`asesorusuario` (`idAsesor`, `Nombres`, `Paterno`, `Materno`, `Boleta`, `clave`, `correo`, `status`) VALUES ('$user', '$nombre', '$paterno', '$materno', '$boleta', '$contra','$correo', 'ACTIVE'");	
		//Ejecuto la sentencia 
		 
		if($rs)
		{
		header("Location: register.php?ready=yes"); 
		}else
		{header("Location: register.php?ready=no"); }
	
		
	}else
	{
		echo"el usuario ya existe";
		header("Location: register.php?user=no"); 
	} 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asesores | SISAE</title>
<link href="../css/index.css" rel="stylesheet" type="text/css" />
<link href="../build/button/assets/skins/sam/button.css" rel="stylesheet" type="text/css" />
<link href="../build/container/assets/skins/sam/container.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="../build/element/element-min.js"></script>
<script type="text/javascript" src="../build/button/button-min.js"></script>
<script type="text/javascript" src="../build/container/container-min.js"></script>
<script type="text/javascript" src="../javascript/register.js"></script>
<link href="../css/login.css" rel="stylesheet" type="text/css" />
</head>


<body class="yui-skin-sam">
<div id="gral">
<div id="Header"><div id="header2">
  <div id="con_ini">FORMULARIO PARA DAR DE ALTA UN ASESOR</div>
  <div id="sesion"><a href="#">Cerrar Sesion</a></div><div class="clr"></div>
  </div><div id="head_img">
  <h2 class="bco"><img src="../icos/businesswoman_man.png" alt="SISAE" width="128" height="128" align="middle" />SISTEMA DE ASESORADOS BIENVENIDO <img src="../icos/businessman_woman.png" alt="SISAE" width="128" height="128" align="middle" /></h2>
</div>
</div>
<div id="container">
  <div id="Ajax_API">Dentro de esta parte podras encontrar toda la parte que es necesaria para realizar tus Asesorias.</div>
  <div id="contTleft">
  
  
  
  <table cellpadding="0" cellspacing="0" align="center">
<tr>
		<td class="arribaizq">&nbsp;</td>
        <td class="centrotop">&nbsp;</td>
        <td class="arribader">&nbsp;</td>
    </tr>
    <tr>    	
      <td class="lateralizq">&nbsp;</td>
      <td>
      <?php
if(isset($_GET['ready']))
{
	switch($_GET['ready']){
	case 'yes':
		echo"<font color='#9C0'><h3>Usuario dado de alta correctamente</h3><p class='center'><input type='image' name='img' id='img' src='../icos/key.png' title='Pagina Principal' onclick='redirect();'/></p></font>";
		break;
	case 'no'://corregir lo de las comillas para el case
		echo"<font color='#600'><h3>El usuario no ha podido ser dado de Alta por favor Intentelo de Nuevo mas Tarde</h3></font>";
		break;
	}
	?>
<?php
}else{?>
      <center>
      <form id="form1" name="form1" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <table><tr><td>Nickname</td>
<td>    <input type="text" name="user" id="user" />
  <span class="rojo"><sup>*</sup></span></td>
</tr><tr>
    <td>Contrase&ntilde;a</td>
<td>    <input type="password" name="contra" id="contra" />
  <sup class="rojo">*</sup></td></tr><tr>
<td>    Nombre</td>
<td>    <input type="text" name="nombre" id="nombre" />
  <sup class="rojo">*</sup></td></tr><tr>
    
    <td>Apellido Paterno</td>
<td>    <input type="text" name="ap_paterno" id="ap_paterno" />
  <sup class="rojo">*</sup></td></tr><tr>
   
    <td>Apellido Materno</td>
   <td> <input type="text" name="ap_materno" id="ap_materno" />
     <sup class="rojo">*</sup></td></tr><tr>
  
   <td> Boleta</td>
   <td> <input type="text" name="bol" id="bol" />
     <sup class="rojo">*</sup></td></tr><tr>
   
    <td>Correo</td>
   <td> <input type="text" name="correo" id="correo" />
     <sup class="rojo">*</sup>     <input name="welcome" type="hidden" id="welcome" value="welcome" /></td></tr></table>
  
    <p>
      <input type="submit" " name="show" id="show" value="Enviar"  class="button"/>
    </p>
    <p class="rojo"><sup>*</sup>Campos Obligatorios</p>
      </form>
<?php
}
if(isset($_GET['user']))
{
	echo"<font color='#600'><h3>El Usuario no esta Disponible</h3></font>";
}
if(isset($_GET['datos']))
{
	echo"<font color='#600'><h3>Algun Dato esta vacio</h3></font>";
}
?>
</center>
      </td>
      <td class="lateralder">&nbsp;</td>
   	</tr>
    <tr>    	
      <td class="abajoizq">&nbsp;</td>
      <td class="centrobot">&nbsp;</td>
      <td class="abajoder">&nbsp;</td>
   	</tr>
</table>
<style> 
#container { height:12em; }
</style>
<script> 
YAHOO.namespace("example.container");
 
function init() {
	
	// Define various event handlers for Dialog
	var handleYes = function() {
		form1.submit();
		this.hide();
	};
	var handleNo = function() {
		this.hide();
	};
 
	// Instantiate the Dialog
	YAHOO.example.container.simpledialog1 = new YAHOO.widget.SimpleDialog("simpledialog1", 
																			 { width: "300px",
																			   fixedcenter: true,
																			   visible: false,
																			   draggable: false,
																			   close: true,
																			   text: "Listo para Registrarte",
																			   icon: YAHOO.widget.SimpleDialog.ICON_HELP,
																			   constraintoviewport: true,
																			   buttons: [ { text:"Yes", handler:handleYes, isDefault:true },
																						  { text:"No",  handler:handleNo } ]
																			 } );
	YAHOO.example.container.simpledialog1.setHeader("Haz llenado el Formulario?");
	
	// Render the Dialog
	YAHOO.example.container.simpledialog1.render("container");
 
	YAHOO.util.Event.addListener("show", "click", YAHOO.example.container.simpledialog1.show, YAHOO.example.container.simpledialog1, true);

 
}
 
YAHOO.util.Event.addListener(window, "load", init);
</script>
 
 
<div id="container">

</div>
  
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
