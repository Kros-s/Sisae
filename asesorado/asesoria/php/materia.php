<?php
materias();
function materias()
{

//conecto con la base de datos 
$conn = mysql_connect("localhost","root",""); 
//selecciono la BDD 
mysql_select_db("sisae",$conn); 

//Sentencia SQL para buscar un usuario con esos datos 
$ssql = "SELECT * FROM materias"; 

//Ejecuto la sentencia 
$rs = mysql_query($ssql,$conn); 

//vemos si el usuario y contraseña es váildo 
//si la ejecución de la sentencia SQL nos da algún resultado 
//es que si que existe esa conbinación usuario/contraseña 
if (mysql_num_rows($rs)!=0){ 
    echo "<select name='materia' id='materia'><option>Selecciona una Opcion</option>";
	 while ($row = mysql_fetch_array($rs))
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
mysql_free_result($rs); 
mysql_close($conn); 
}
?>
