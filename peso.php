<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<form method="post" action="">
	Ingrese su peso:
	<input type="text" name="peso">
	<br>
	<input type="radio" name="radio1" value="Marte">Marte
	<br>
	<input type="radio" name="radio1" value="La_luna">La Luna
	<br>
	<input type="submit" value="operar" name="peso">
	
	</form> 
	  
<body>
	
	<?php
	if(isset($_POST["peso"])){
		$p=78;$gt=9.8;$m=$p/$gt;$gm=3.711;$gl=1.62;
		
		if ($_REQUEST['radio1']=="Marte"){
			$peso=$_REQUEST['peso']=$m*$gm;
			 echo "su peso  en Marte es  :" . $peso;
		}
	else if ($_REQUEST['radio1']=="La_luna"){
				$peso=$_REQUEST['peso']= $m*$gl;
					
			 echo "su peso  en la luna es   :" . $peso;
	}
	}
	

		
  
	?>
	
</body>
</html>







