<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<style>
	form {
		
	background: #ccc;
	height:auto;
		width:auto;
	margin: auto;
  display: inline;
		
	</style>
</head>
	<form method="post" action="" name="nuevo" ;>
	
		<input type="submit" name="electrodomesticos"  value="mostrar electro" >
	</form>
<body>
	<?php
	if(isset($_POST["electrodomesticos"]))	{
	
     //$frases=$_POST["frases"]=array(
     $frases=array(
	1=>"Horno 1",
	2=>"avadora 2",
	3=>"Nevera",
	4=>"Radio",
	5=>"Secadora",
	6=>"Brilladora",
	7=>"Aspiradora",
	8=>"LavaPlatos",
	9=>"Estufa",
	10=>"Plancha",
	11=>"calentador",
	12=>"EquipoSonido",
	13=>"VHS",
	14=>"BluRay",
	15=>"Licuadora"
	
	
);
		
 $electrodomésticos =rand(1,15);
	 echo "<br>" . $frases[$electrodomésticos];
	}
	
?>
</body>
</html>