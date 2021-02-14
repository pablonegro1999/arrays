<html>

<head>

<title>meses del año </title>

</head>

<body>

<form>

tu mes elegido es ; <br>
	<input type="text" name="mes" id="mes" onchange="calcular();">
		<option>1-lunes 	</option>
		<option>2-martes</option>
		<option>3-miercoles</option>
		<option>4-jueves</option>
		<option>5-viernes</option>
		<option>6-sabado</option>
		<option>7-domingo</option>
	<input type="submit" value="mes elegido">	
	</input><br>

</form>

</body>

</html>

<?php

	$mes=['lunes<br>',
		  'Martes<br>',
			'Miercoles<br>',
			'Jueves<br>',
			'Viernes<br>',
			'Sabado<br>',
			'Domingo<br>'
];
	$dia=$_GET["mes"]-1;
		
		
			
			echo "<br> mes elegido "." : ". $mes[$dia];
			
			
?>

<div id="resultado" style="background-color:blue"></div>


<script>

function calcular () {
	
	mes=document.getElementById("mes").value;
	
	document.getElementById("resultado").innerHTML="numero de mes elegido:" + mes;
	
}
calcular();
</script>
	