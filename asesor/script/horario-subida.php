<?php
session_start();
$usuario = $_SESSION['user'];
include("../../javascript/sisae.php");

$mat = $_REQUEST['materia'];
$h1 = $_REQUEST['horaini'];
$h2 = $_REQUEST['horafin'];
$day = $_REQUEST['day'];

$insert = $sisae->Upload("INSERT INTO `sisae`.`horarios` (`idHorario`, `Dia`, `Horainic`, `Horafin`, `IdAsesor`, `IdMateria`) VALUES (NULL, '$day', '$h1', '$h2', '$usuario', '$mat')");
if($insert == true)
{
	echo"LISTO HORARIO DADO DE ALTA CORRECTAMENTE";
}else
{
	echo"UPS NO SE PUDO";
}
?>