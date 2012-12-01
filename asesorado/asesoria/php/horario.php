<?php
materias();
function materias()
{
	$asesor = $_REQUEST['asesor'];
	$materia = $_REQUEST['materia'];
	include("../../../BD/BD.php");
	//Sentencia SQL para buscar un usuario con esos datos 
	$rs = $bd->Execute("SELECT `horarios`.`Dia`,`horarios`.`IdAsesor`,`horarios`.`Horainic`,`Horarios`.`Horafin`\n"
	    . "FROM horarios, materias\n"
	    . "WHERE `horarios`.`IdMateria` = `materias`.`IdMateria` AND `materias`.`Materia` = '$materia' AND `horarios`.`IdAsesor` = '$asesor'");
	if (!empty($rs)){ 
	    echo "<select name='sched' id='sched'><option>Selecciona un Horario</option>";
		 foreach ($rs as $row)
	      {
			  echo"<option value='";
			  echo $row['Dia'] . " " . $row['Horainic'] . " " . $row['Horafin'];
			  echo "'>";
			  echo $row['Dia'] . " de " . $row['Horainic'] . " - " . $row['Horafin'];
			  echo "</option>";
	      }
		echo"</select>";
	}else { 
	    //si no existe le mando otra vez a la portada 
		if($asesor == 'Selecciona un Asesor')
		{
			echo"Selecciona un Asesor por favor";
		}else{
			echo"El asesor no tiene horarios temporalmente favor de avisar al ADMIN.."; 
		}
	} 
}
?>