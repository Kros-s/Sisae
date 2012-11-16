<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("sisae",$con);
$sql = "SELECT * FROM status_asesoria";
$rs = mysql_query($sql,$con)or die(mysql_error());
if(mysql_num_rows($rs) != 0)
{
	echo"<select name=\"cambio\" id=\"cambio\">";
	while($res = mysql_fetch_array($rs))
	{
		echo"<option value=\"" . $res['status_Asesoria'] . "\">" . $res['status_Asesoria'] . "</option>";
	}
	echo"</select>";
}

?>