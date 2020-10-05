<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	<form name="form1" method="post" action="">
  <p>
	  
	  <label>los colores son:<h5>verde</h5>
		  <h5>anaranjado</h5><h5>amarillo</h5><h5>rosado</h5><h5>rojiso</h5><h5>morado</h5><h5>purpura</h5><h5>rosa</h5><h5>rojo</h5><h5>borgonia</h5><h5>blanco</h5><h5>violeta</h5><h5>lima</h5><h5>ambar</h5><h5>naranja</h5>
		  </p></label>
    <label for="frutas"></label>
    <input type="text" name="fruta" id="fruta">
  </p>
  <p>
    <input type="submit" name="enviando" id="button" value="Enviar" >
  </p>
</form>
<p>&nbsp;</p>
<body>
	<?php
	$frutas=array("verde"=>"pera","naranjada"=>"anaranja","amarillo"=>"piña","rosado"=>"pomarosada","rojisa"=>"fresa","morado"=>"uva","purpura"=>"ciruela","rosa"=>"sandia","rojo"=>"manzana","borgonia"=>"ceresa","blanco"=>"banano","violeta"=>"arandano","lima"=>"lima","ambar"=>"limon","naranja"=>"zanahoria");
	

	if(isset($_POST["enviando"])){
		
		$fruto=$_POST["fruta"];
		
			echo $frutas[$fruto];
		
	}
		?>
</body>
</html>