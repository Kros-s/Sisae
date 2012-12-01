<?php
registro();
function registro()
	{
	$user = $_REQUEST['user'];
	$asesor = $_REQUEST['asesor'];
	$materia = $_REQUEST['materia'];
	$datos = $_REQUEST['sched'];
	//conecto con la base de datos 
	include("../../../BD/BD.php");
	//Sentencia SQL para buscar un usuario con esos datos 
	$rs = $bd->Upload("INSERT INTO `sisae`.`asesoria` (`idAsesorMateria`, `idAsesor`, `IdAlumno`, `Materia`, `status`, `Dia`) VALUES (NULL, '$asesor', '$user', '$materia', 'ACTIVA', '$datos');");
	
	//Ejecuto la sentencia 
	 
	if($rs)
	{
		echo"<div class='extra' id='headercito'><img src='../../icos/accept.png' alt='SISAE' width='128' height='128' align='middle' />ASESORIA DADA DE ALTA CORRECTAMENTE</div>";
		echo "<br /><p class='bold'>El usuario: " . $user . " dio de alta una asesoria con: " . $asesor . " Materia: " . $materia . " dia y hora: " . $datos . "</p><br><a href='../index.php'>Volver</a>";
	}
	else{
		echo"<div class='extra' id='headercito'>PROBLEMAS AL DAR DE ALTA TU ASESORIA INTENTALO DE NUEVO O CONTACTA AL ADMINISTRADOR</div>";
	}
	 
}
?>
