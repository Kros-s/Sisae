<?php

materias();
function materias()
{
$asesor = $_REQUEST['materia'];
//conecto con la base de datos 
$conn = mysql_connect("localhost","root",""); 
//selecciono la BDD 
mysql_select_db("sisae",$conn); 

//Sentencia SQL para buscar un usuario con esos datos 
$ssql = "SELECT `asesor_materia`.`IdAsesor` as Asesor,`materias`.`Materia`, `asesorusuario`.`Nombres`
FROM asesor_materia, materias, asesorusuario
WHERE `asesor_materia`.`IdMateria` = `materias`.`IdMateria` AND `materias`.`Materia` = '$asesor' AND `asesor_materia`.`IdAsesor` = `asesorusuario`.`idAsesor`"; 

//Ejecuto la sentencia 
$rs = mysql_query($ssql,$conn)or die(mysql_error());; 

//vemos si el usuario y contraseña es váildo 
//si la ejecución de la sentencia SQL nos da algún resultado 
//es que si que existe esa conbinación usuario/contraseña 
if (mysql_num_rows($rs)!=0){ 
    echo "<select name='asesor' id='asesor'><option>Selecciona un Asesor</option>";
	 while ($row = mysql_fetch_array($rs))
      {
		  echo"<option value='";
		  echo $row['Asesor'];
		  echo "'>";
		  echo $row['Nombres'] . " Alias =>" . $row['Asesor'];
		  echo "</option>";
      }
	echo"</select>";
}else { 
    //si no existe le mando otra vez a la portada 
	if($asesor == 'Selecciona una Opcion')
	{
		echo"Selecciona una opcion por favor";
	}else{
		echo"La Materia Temporalmente no Tiene Asesores favor de comunicarte con el Admin."; 
	}
} 
mysql_free_result($rs); 
mysql_close($conn); 
}
?>