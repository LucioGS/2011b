<html>
<head>
</head>
<body>
<?php

	$la_fecha = $_POST["fecha"];
	$la_fecha_timestamp = strtotime($la_fecha);

	echo "Fecha recibida: $la_fecha </br>";
	echo "Fecha timestamp: $la_fecha_timestamp </br>";
	echo "Fecha normal: " . date("d/m/Y", $la_fecha_timestamp) . "</br>";
	echo "Sólo año: " . date("Y", $la_fecha_timestamp) . "</br>";
	echo "Sólo mes: " . date("m", $la_fecha_timestamp) . "</br>";
	echo "Sólo mes: " . date("M", $la_fecha_timestamp) . "</br>";
	echo "Personalizada 1: " . date("d", $la_fecha_timestamp) . " de " . date("M", $la_fecha_timestamp) . " del año " . date("Y", $la_fecha_timestamp) ."</br>";


	
?>
</body>
</html>

