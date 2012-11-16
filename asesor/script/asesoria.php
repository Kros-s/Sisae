
<?php
$asesoria = $_REQUEST['asesoria'];
$con = mysql_connect("localhost","root","");
mysql_select_db("sisae",$con);
$sql = "SELECT * FROM asesoria WHERE idAsesorMateria = '$asesoria' ";
$rs = mysql_query($sql,$con)or die(mysql_error());
if(mysql_num_rows($rs) != 0)
{

	$array = mysql_fetch_array($rs);
	echo  "<form id='frm'>Editar el status de la Asesoria <b>" . $array['idAsesorMateria'] . "<input type='hidden' name='numero' id='numero' value='" . $array['idAsesorMateria'] . "' />";
	echo "</b> con el Usuario<b> " . $array ['IdAlumno'] . "</b>";


}
$sql = "SELECT * FROM status_asesoria";
$rs = mysql_query($sql,$con)or die(mysql_error());
if(mysql_num_rows($rs) != 0)
{
	echo"<br><select name=\"cambio\" id=\"cambio\"><option>Selecciona una Opcion</option>";
	while($res = mysql_fetch_array($rs))
	{
		echo"<option value=\"" . $res['status_Asesoria'] . "\">" . $res['status_Asesoria'] . "</option>";
	}
	echo"</select></form>";
}


?>