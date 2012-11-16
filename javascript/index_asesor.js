// JavaScript Document
window.onload = function()
{
	$('editable_1').onclick=llamar_2;
	$('horary').onclick = mat;
	$('dayly').onclick = called;
}

function sample(asesoria)
{
	$Ajax("script/asesoria.php",
		  {
			  metodo:$metodo.POST,
			  parametros: "asesoria="+asesoria.value,
			  onfinish:function(php)
			  {
				  $('tutos').innerHTML = php;
				  $('cambio').onchange = function()
				  {
					  var data = $('frm').serialize();
					  $Ajax("script/change.php",
							{
								metodo: $metodo.GET,
								parametros: data,
								onfinish:function(chan)
								{
									$('tutos').innerHTML = chan;
									llamar_2();
								}
							});
				  }
			  }
		  });
	
}
function llamar_2()
{
	$Ajax("script/status.php",
		  {
			  onfinish: function(query)
			  {
				  $('contTleft').innerHTML = query;
			  }
		  });
}
function mat()
{
	$Ajax("script/materias-form.php",
		  {
			  cache:false,
			  onfinish:function(query)
			  {
				  $('contTleft').innerHTML = query;
			  }
		  });
}
function llamadak()
{
	var datos = $('form1').serialize();
	alert (datos);
	$Ajax("script/materias-subida.php",
		  {
			  metodo:$metodo.POST,
			  parametros:datos,
			  onfinish:function(query)
			  {
				  $('contTleft').innerHTML = query;
			  }
		  });
}
function called()
{
	$Ajax("script/horario-form.php",
		  {
			  cache:false,
			  onfinish:function(query)
			  {
				  $('contTleft').innerHTML = query;
			  }
		  });
}
function guardar_materia()
{
	var datos = $('form1').serialize();
	$Ajax("script/horario-subida.php",
		  {
			  metodo:$metodo.POST,
			  parametros:datos,
			  onfinish:function(query)
			  {
				  $('contTleft').innerHTML = query;
			  }
		  });
}
			  