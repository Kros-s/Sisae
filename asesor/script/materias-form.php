<p>Actualmente tu das Asesoria a las Siguientes materias</p>
<?php
session_start();
$usuario = $_SESSION['user'];
include("../../javascript/sisae.php");// ERROR BD PHP
$mat = $sisae->Execute("SELECT materias.Materia FROM asesor_materia, materias WHERE materias.idMateria = asesor_materia.IdMateria AND asesor_materia.IdAsesor = '$usuario'");

foreach($mat as $opcion)
{
	echo "Tu impartes actualemte : " .  $opcion['Materia'] . "\n<br>";
}

?>
<p>Necesitas seleccionar al menos una materia para impartir Asesorias o agregar alguna extra</p>

<form name="form1" id="form1">
<?php
/*
* En esta parte nos encargaremos de que primero de de alta sus materias
*/

$mat = $sisae->Execute("SELECT * FROM materias");
echo"<select name='materia' id='materia'>\n";
foreach($mat as $opcion)
{
	echo "<option value='" . $opcion['idMateria'] . "'>" . $opcion['Materia'] . "</option>\n";
}
echo "</select>";
?>

<label>
  <input type="button" name="mat" id="mat" value="Guardar" onclick="javascript:llamadak();">
</label>
</form>