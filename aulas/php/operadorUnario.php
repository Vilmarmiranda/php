<!DOCTYPE html>
<html>
<head>
	<title>operador unario</title>
</head>
<body>
	<?php 
		$num1=20;
		$num2=30;
		echo "$num1 é maior que $num2? <br/>";
		echo $result=$num1<$num2?"verdadeiro":"faso";


		echo "<br/> -------------------------------------";


		echo "<br/>passar os valores das variaveis por paramentros";

		$valor1=$_GET["valor1"];
		$valor2=$_GET["valor2"];
		$operacao=$_GET["op"];

		echo "<br/> Os valores passados por parametros foram $valor1 e $valor2<br/>";

		$result=($operacao=="s") ? $valor1+$valor2 : $valor1*$valor2;
				//se operacao for igual a "s" ?	(entao) valor1+valor2 :(senao) valor 1*valor2

		echo " O resultado será: $result";

	?>
</body>
</html>