<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	
	$a=0;
	$b=1;
	$c=0;

	
		while($c<500){			
			if($c==0){
				echo $c .  "<br>";
			}else {	
				echo $c .  "<br>";
			}
			$c=$a+$b;
			$b=$a;
			$a=$c;
		}
	?>	
</body>
</html>