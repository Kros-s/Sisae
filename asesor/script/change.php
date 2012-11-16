<?php
$asesoria = $_REQUEST['numero'];
$status = $_REQUEST['cambio'];
if($status != "Selecciona una Opcion")
{
$con = mysql_connect("localhost","root","");
mysql_select_db("sisae",$con);
$sql = "UPDATE `sisae`.`asesoria` SET `status` = '$status' WHERE `asesoria`.`idAsesorMateria` = $asesoria";
$rs = mysql_query($sql,$con)or die(mysql_error());
if($rs != 0)
{
	echo"LISTO";
}else
{
	echo"Algo Fallo";
}
}
?>