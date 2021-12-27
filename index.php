<?php

print '<br/><br/>

<div style="margin-left:25%;padding-top:80px;">
	
	<img style="width:890px;height:400px;" src="desayuno.jpg" />
	
	<h1 id="titulo" style="font-size:80px;">ESTOY DESAYUNANDO</h1>

</div>

<script>

	const imagenes = ["red", "green", "blue"];
	
	const routulos = ["white", "white", "pink"];
	
	document.body.style.backgroundColor=imagenes[0];
	
	document.getElementById("titulo").style.color =routulos[0];
	
	window.onload = function() {
		
		setInterval(cambiarFondo, 1500);
	
	}
	
	var fondoActual = 1;
	
	function cambiarFondo() {
		
		document.body.style.backgroundColor=imagenes[fondoActual];
		
		document.getElementById("titulo").style.color =routulos[fondoActual];
		
		++fondoActual;
		
		
		if(fondoActual==imagenes.length){
			fondoActual = 0;
		}
	
	}
	
</script>

';

?>