<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	$cont=0;
		
	
			
	
			
		for($i=1; $i<=30; $i++){
			$num=rand(1,30);
			
			if($num<20 ){
			$cont++;
			
		  
			echo    $num  . " , ";
				 
			}
       
			  
	 
		}echo " <br> el total de numeros es.    " . $cont;
	
	?>
	
</body>
</html>