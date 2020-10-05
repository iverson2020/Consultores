<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		//Arreglos (Arrays) 
		$cont=0;
		$arreglo_numeros = [];
		$arreglo_numeros_menores = [];
		
		for($i=1; $i<=30; $i++)
		{
			$num = rand(1,100);
			$arreglo_numeros[] = $num;

			if($num<20 )
			{
				$cont++;
				echo    $num  . " , ";
				$arreglo_numeros_menores[] = $num; 
			}
       
			  
	 
		}echo " <br> el total de numeros es.    " . $cont;
	
	?>
	
</body>
</html>