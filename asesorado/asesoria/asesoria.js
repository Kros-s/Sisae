// JavaScript Document
window.onload = function()
{
	$('called').disabled = true;
	$('called').onclick = registro;
	$Ajax("php/materia.php",
		  {
			  metodo: $metodo.POST,
			  onfinish: function(html){
				  $('materiasDisp').innerHTML = html;
				  $('materia').onchange = llamar_asesor;
				  
			  }
		  });
		  
}
function llamar_asesor(){
	var dtos = $('materia').serialize();
	$Ajax("php/asesor.php",
		  {
			  metodo: $metodo.POST,
			  parametros: dtos,
			  onfinish: function(asesor)
			  {
				  $('AsesorMat').innerHTML = asesor;
				  $('asesor').onchange = llamar_horario;
				  $('called').disabled = true;
				  $('Horario').innerHTML = "";
			  }
		  });
			  
}
function llamar_horario()
{
	$('called').disabled = true;
	var datos = $('asesoria').serialize();
	$Ajax("php/horario.php",
		  {
			 
			  parametros: datos,
			  onfinish: function(horario)
			  {
				  $('Horario').innerHTML = horario;
				  $('sched').onchange = activar_boton;
					  
			  }
		  });
}
function registro()
{
	alert("Estamos a punto de realizar el registro");
}
function activar_boton()
{
	document.getElementById('called').disabled = false;
	$('called').onclick = function()
	{
		var data = $('asesoria').serialize();
		$Ajax("php/registro.php",
			  {
				  metodo: $metodo.POST,
				  parametros: data,
				  onfinish: function(regis){
					  $('formulario').innerHTML = regis;
				  }
			  });
	}
}

