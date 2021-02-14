<html>

<head>

<title>meses del año </title>

</head>

<body>

<form>

tu mes elegido es ; <br>
	<select name="mes" id="mes" onchange="calcular();">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
	</select><br>
	<input type="submit" value="mes elegido">
</form>

</body>

</html>

<?php

	$mes=['Enero<br>',
		  'Febrero<br>',
			'Marzo<br>',
			'Abril<br>',
			'Mayo<br>',
			'Junio<br>',
			'Julio<br>',
			'Agosto<br>',
			'Septiembre<br>',
			'Octubre<br>',
			'Noviembre<br>',	
			'Diciembre<br>'
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
	