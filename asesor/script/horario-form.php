<?php
session_start();
$usuario = $_SESSION['user'];
include("../../javascript/sisae.php");
$insert = $sisae->Execute("SELECT materias.Materia, horarios.horainic, horarios.Dia, horarios.horafin FROM horarios, materias WHERE materias.idMateria = horarios.IdMateria AND horarios.IdAsesor = '$usuario' ORDER BY materias.Materia");
foreach($insert as $lista)
{
	echo  $lista['Materia'] . " el dia <strong>: " . $lista['Dia'] . " de " . $lista['horainic'] . " a " . $lista['horafin'] . "</strong><br>\n"; 
}
?>


<form name="form1" id="form1" method="post"  action="horario-subida.php">
<?php

$mat = $sisae->Execute("SELECT materias.Materia, materias.idMateria FROM asesor_materia, materias WHERE materias.idMateria = asesor_materia.IdMateria AND asesor_materia.IdAsesor = '$usuario'");

echo"<select name='materia' id='materia'>\n";
foreach($mat as $opcion)
{
	echo "<option value='" . $opcion['idMateria'] . "'>" . $opcion['Materia'] . "</option>\n";
}
echo "</select>";

?>
<p>
  <label>Selecciona un dia para tus Asesorias:
    <select name="day" id="day">
      <option value="Lunes" selected="selected">Lunes</option>
      <option value="Martes">Martes</option>
      <option value="Miercoles">Miercoles</option>
      <option value="Jueves">Jueves</option>
      <option value="Viernes">Viernes</option>
    </select>
  </label>
</p>
<p>
  <label>Hora inicial
    <select name="horaini" id="horaini">
      <option value="9:00">9:00</option>
      <option value="10:00">10:00</option>
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
      <option value="18:00">18:00</option>
      <option value="19:00">19:00</option>
      <option value="20:00">20:00</option>
    </select>
  </label>
  <label>Hora Final
    <select name="horafin" id="horafin">
      <option value="9:00">9:00</option>
      <option value="10:00">10:00</option>
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
      <option value="18:00">18:00</option>
      <option value="19:00">19:00</option>
      <option value="20:00">20:00</option>
    </select>
  </label>
  <label>
    <input type="button" name="button" id="button" value="Enviar" onclick="guardar_materia();"/>
  </label>
</p>
</form>
