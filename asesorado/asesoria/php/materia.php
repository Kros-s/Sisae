<?php
materias();
function materias()
{

	//conecto con la base de datos 
	include("../../../BD/BD.php");
	//Sentencia SQL para buscar un usuario con esos datos 
	$rs = $bd->Execute("SELECT * FROM materias"); 
	
	if (!empty($rs)){ 
	    echo "<select name='materia' id='materia'><option>Selecciona una Opcion</option>";
		 foreach ($rs as $row)
	      {
			  echo"<option value='";
			  echo $row['Materia'];
			  echo "'>";
			  echo $row['Materia'];
			  echo "</option>";
	      }
		echo"</select>";
	}else { 
	    //si no existe le mando otra vez a la portada 
	    echo"error usuario"; 
	} 
}
?>
