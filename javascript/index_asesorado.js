// JavaScript Document
window.onload = function()
{
	$('date').onclick = Horario;
	$('solicited').onclick= function()
	{
		document.location.href = 'asesoria/asesorias.php';
	}
}
function Horario()
{
	$Ajax("act/index.php",
		  {
			  cache:false,
			  onfinish: function(index)
			  {
				  $('contTleft').innerHTML = index;
			  }
		  });
}

