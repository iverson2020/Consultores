<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>no tiene</title>
	<style>
	h1{
		text-align:center;
		font-size:28px;
		color:#F75C0C;
		font-weight:bold;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.sinValor{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}
	</style>
</head>
	<h1>Nombre del paciente</h1>

<form action="" method="post" name="usuario" >
  <table width="65%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre"></label>
      <input type="text" name="nombre" ></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad"></label>
      <input type="text" name="edad" </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>
<body>
<?php
	if(isset($_POST["enviando"])){
		
		$nombre=$_POST["nombre"];
		
		$edad=$_POST["edad"];
		$nombre=strtoupper($nombre );
			echo "&nbsp";
		if ($edad<17){
		
			echo   "<p class='sinValor'>  tu    "  . $nombre .   "    no puedes entrar eres menor de edad</p>";	
			
		}
	
		
		else{
			
		 echo "<p class='validado'>  tu nombre es: "  . $nombre . "  tienes " . $edad  . "   años <br> </p>" ;
		}
	}
	?>
</body>
</html>