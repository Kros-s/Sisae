<?php
session_start();
$usuario = $_SESSION['usuario'];
if(isset($_SESSION['usuario']))
{
	$con = mysql_connect("localhost","root","");
	mysql_select_db("sisae",$con);
	$sql = "SELECT * FROM asesoria WHERE idAlumno = '$usuario' AND asesoria.status <> 'FINALIZADA' ORDER BY   asesoria.idAsesorMateria DESC";
	$rs = mysql_query($sql,$con);
	if(mysql_num_rows($rs)!= 0)
	{
		echo"<div id='asesoria_1'><h3>Asesorias del Usuario $usuario Son:</h3><div class='line'></div>";
		echo"<table>";
		while($array = mysql_fetch_array($rs))
		{
			echo"<tr><td class='asesor'>";
			echo $array['idAsesor'] . "</td><td class='materia'>" . $array['Materia'] . "</td><td class='status'>" . $array['status'] . "</td><td class='day'>" .$array['Dia'] . "</td>";
			echo"</td></tr>";
		}
		echo"</table></div>";
	}
	else
	{
		echo"<div class='line'></div><h3>No hay asesorias por el momento o Todas se encuentran en estado FINALIZADO</h3><div class='line'></div>";
	}
}
?>