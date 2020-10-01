<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<form method="get" action="">
		<input type="text" name="operando1">
		<select name="operador">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="text" name="operando2">
	
		<input type="submit"  value= "enviar" name="enviar">
	</form>
<body>
	<?php
	
	if(isset($_GET["enviar"]))
	{
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];

	if($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else {
		$solucion = $operando1 / $operando2;
	}
	echo "La solución es: ". $solucion;
	}
?>
</body>
</html>