<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	<form name="form1" method="post" action="">
  <p>
	 
    <label for="vocales"></label>
    <input type="text" name="vocales" id="vocales">
  </p>
  <p>
    <input type="submit" name="enviando" id="vocales" value="Enviar" >
  </p>
</form>
<p>&nbsp;</p>
<body>
	<?php
	if(isset($_POST["enviando"])){
		
		$vocal=$_POST["vocales"];
		
		
		
	$Vocales = array ('a','e','i','o','u'); 
	echo "numero de  vocales en la cadena: ".$vocal . "<br/>";
	 
	$array = count_chars (strtolower($vocal),1);

	foreach($array as $clave => $valor){
		$letra =chr($clave); 
		if (in_Array($letra,$Vocales)){
			echo "   Vocal: ".$letra.", encontrada ".$valor."    veces<br/>     ";
			
			
		}
		
	}
		
	}
		
		
		?>
</body>
</html>