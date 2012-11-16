<?php
materias();
function materias()
{
$asesor = $_REQUEST['asesor'];
$materia = $_REQUEST['materia'];
//conecto con la base de datos 
$conn = mysql_connect("localhost","root",""); 
//selecciono la BDD 
mysql_select_db("sisae",$conn); 

//FALTA VERIFICAR POR QUE ESTE SQL NO FUNCIONO SI LA SINTAXIS FUNCIONA BN EN LA BD
//$ssql = "SELECT `horarios`.`Dia`,`horarios`.`IdAsesor`
//FROM horarios, materias
//WHERE `horarios`.`IdMateria` = `materias`.`IdMateria` AND `materias`.`Materia` = '$materia' AND `horarios`.`IdAsesor` = '$asesor'"
$ssql = "SELECT `horarios`.`Dia`,`horarios`.`IdAsesor`,`horarios`.`Horainic`,`Horarios`.`Horafin`\n"
    . "FROM horarios, materias\n"
    . "WHERE `horarios`.`IdMateria` = `materias`.`IdMateria` AND `materias`.`Materia` = '$materia' AND `horarios`.`IdAsesor` = '$asesor'";
//Ejecuto la sentencia 
$rs = mysql_query($ssql,$conn)
or die("La consulta falló: " . mysql_error()); 
if (mysql_num_rows($rs)!=0){ 
    echo "<select name='sched' id='sched'><option>Selecciona un Horario</option>";
	 while ($row = mysql_fetch_array($rs))
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
mysql_free_result($rs); 
mysql_close($conn); 
}
?>