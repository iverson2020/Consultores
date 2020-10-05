<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	<p>&nbsp;</p>
<form name="form1" method="post" action="" >
  <p>
   
    <input type="text" name="num" id="num" placeholder="numero a evaluar"> 
   
  <p>
    <input type="submit" name="multiplo"  value="multiplo de 3">
  </p>
</form>
<p>&nbsp;</p>

<body>
	
	<?php
	

	if(isset($_POST["multiplo"])){
		
		
		$num=$_POST["num"];
		
	
		
			  if ($num % 3 == 0 && $num>0){
				
			   echo  "el numero es multiplo de 3";
		   }else 
				 echo  "el numero es no no multiplo ";  
	}
		?>
</body>
</html>