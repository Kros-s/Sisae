<?php
header("Content-type: text/text; charset=ISO-8859-1");
include("../javascript/sisae.php");
$record = $sisae->Execute("SELECT IdAsesor, COUNT(idAsesorMateria) AS tot  FROM asesoria GROUP BY IdAsesor ORDER BY tot DESC");
//print_r($record);
$c = 1;
echo"<center><table><th>Asesor</th><th>Asesorias</th><th>Ranking</th>";
foreach($record as $total)
{
	echo "<tr><td>" . $total['IdAsesor'] . "</td><td>" . $total['tot'] . "</td><td>$c</td></tr>";
	$c++;
}
echo"</table></center>";
	echo"SI NO VES ALGUN ASESOR ES POR QUE NO HA DADO NINGUNA ASESORIA";
?>
<h3>COMO USO SISAE'S (REGISTRO)?</h3>
<div class="line"></div>
<p>Tu como asesorado tendras que realizar un pequeño registro, con el cual podras gozar de todos los beneficios que ofrece SISAE ,es muy sencillo, simple y rápido solo tendrás que ingresar correctamente tus datos: usuario y contraseña. Ten en cuenta que la mayoria de las veces por descuido o por no tener la precaución necesaria, tenemos activadas las mayusculas u oprimimos una tecla incorrecta, asi que te recomendamos realizar el registro con calma y verifica para evitar futuros errores.</p>
<img src="icos/log_in.png" width="128" height="128" />
