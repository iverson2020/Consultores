<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php

	for($i=1; $i<100; $i++){
		
		$primo=true;
		for($j=2; $j<$i; $j++){
			
			if($i % $j ==0){
			$primo=false;
		
			}
		
		
			
		}	
		
		if($primo){
			echo $i . "<br>";
		}
	
	}
	
	
	  
	?>
	
	</body>
</html>


