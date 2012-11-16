<?php
session_start();
echo"<span id='tutos'>Asesorias:</span>";
$usuario = $_SESSION['user'];
$con = mysql_connect("localhost","root","");
mysql_select_db("sisae",$con);
$sql = "SELECT * FROM asesoria WHERE idAsesor = '$usuario' AND asesoria.status <> 'FINALIZADA' ORDER BY   asesoria.idAsesorMateria DESC";
$rs = mysql_query($sql,$con)or die(mysql_error());
if(mysql_num_rows($rs) != 0)
{
	echo("<h3>Tus Asesorias Pendientes son al Momento:</h3><div class=\"line\"></div>");
	echo "<table><th>Asesoria</th><th>Alumno</th><th>Materia</th><th>Dia</th><th>Status</th><th>Edit</th>";
	while($array = mysql_fetch_array($rs))
	{

		echo"<tr>";
		echo"<td>";
		echo $array['idAsesorMateria'];
		echo"</td>";
		echo"<td>";
		echo $array['IdAlumno'];
		echo"</td>";
		echo"<td>";
		echo $array['Materia'];
		echo"</td>";
		echo"<td>";
		echo $array['Dia'];
		echo"</td>";
		echo"<td>";
		echo $array['status'];
		echo"</td>";
		echo"<td><input type='image' id='s' value=\"" . $array['idAsesorMateria'] . "\" src=\"../icos/edit.png\" onclick='sample(this)'></td>";
		echo"</tr>";
	}
	echo"</table>";
}
else{
	echo("<h3>No tienes asesorias por el Momento<h3><div class=\"line\"></div>");
}
mysql_close($con);
?>