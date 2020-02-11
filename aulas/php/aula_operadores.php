<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>aula de operadores</title>
</head>
<body>
	<?php
		//valores passados por parametro (?a=10&b=2)
		$num1 =$_GET["a"];
		$num2= $_GET["b"];

		$soma=$num1+$num2;

		echo "A soma dos numeros é $soma <br>";
		echo "o valor absoluto da variavel é ".abs($num2)."<br>";
		echo "O valor de $num1 <sup>$num2</sup> é ". pow($num1, $num2);
		echo "<br>A raiz quadrada de $num1 é ". sqrt($num1);
		echo "<br> O valor de $num1 arredondado é ". round($num1);
		echo "<br> A parte inteira de $num2 é ". intval($num2);
	?>
</body>
</html>

