// JavaScript Document
window.onload = function()
{
	Index();
	$('home').onclick = Index;
	$('proces').onclick = Index2;
	$('note').onclick = Index3;
	$('login').onclick =function()
	{
		document.location.href = 'asesorado/index.php';
	}
	$('download').onclick = Index4;
	
}
function Index()
{
	$Ajax("pages/principal.html",
		  {
			  cache:false,
			  onfinish: function(html)
			  {
				  $('contTleft').innerHTML = html;
			  }
		  });
	
}
function Index2()
{
	$Ajax("pages/asesoria.php",
		  {
			  cache:false,
			  onfinish: function(html)
			  {
				  $('contTleft').innerHTML = html;
			  }
		  });
	
}
function Index3()
{
	$Ajax("pages/registro.php",
		  {
			  cache:false,
			  onfinish: function(html)
			  {
				  $('contTleft').innerHTML = html;
			  }
		  });
	
}
function Index4()
{
	$Ajax("pages/pagina 2.html",
		  {
			  cache:false,
			  onfinish: function(html)
			  {
				  $('contTleft').innerHTML = html;
			  }
		  });
	
}
