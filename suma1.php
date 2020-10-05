<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
		<p>&nbsp;</p>
<form name="form1" method="post" action="" >
  <p>
   
    <input type="text" name="num1" id="num1"> +
   
    <input type="text" name="num2" id="num2">
      </p>
  <p>
    <input type="submit" name="sumar"  value="SUMAR">
  </p>
</form>
<p>&nbsp;</p>

<body>
	<?php
	
	if(isset($_POST["sumar"])){
		
		
		$num1=$_POST["num1"];
		$num2=$_POST["num2"];
	
		
		$suma=$num1+$num2;
		
		$i=0;
		
		echo "la suma es     "  . $suma  . "<br>";
		
			while($suma>1){
				
				 $i++; 
			$suma=($suma/10);
				
				
			}
			echo "la cantidad de digitos es:  "  .   $i . "<br>";
			
		
           } 
	
	?>
	</body>
</html>