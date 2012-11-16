<?php
session_start();
$usuario = $_SESSION['user'];
$mat = $_REQUEST['materia'];
include("../../javascript/sisae.php");
$sql = $sisae->ExecuteComparation("asesor_materia","IdMateria","'$mat' AND IdAsesor = '$usuario'");
if($sql == true)
{
	echo "YA IMPARTES ESTA MATERIA POR FAVOR SELECCIONA OTRA O DA DE ALTA HORARIOS PARA ESTA MATERIA";
}
else{
	$sql = $sisae->Upload("INSERT INTO `sisae`.`asesor_materia` (`IdAsesor_Materia` ,`IdAsesor` ,`IdMateria` )VALUES (NULL , '$usuario', '$mat')");
	if($sql== true)
	{
		echo"LISTO AHORA YA IMPARTES LA MATERIA";
	}

}
?>