<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>aula de operadores</title>
</head>
<body>
	<?php
		//OPERADORES ARITMETICOS
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
		echo "<br> O valor de $num1 em moeda é R$ ". number_format($num1,2); //para numeros maiores é $num1, 2, "," , "."


echo "<br><br>";

		//OPERADORES DE ATRIBUIÇÃO
		$preco=$_GET["preco"];
		echo "O preço do produto é R$ ". number_format($preco,2)."<br>";

		$preco +=($preco*10/100);
		//$preco = $preco+($preco*10/100); o resultado será igual a espressao acima

		echo "O novo preço com 10% de aumento é R$ ". number_format($preco,2);

		echo "<br><br>";

		$anoAtual=$_GET["aa"];
		echo "Ano atual é: $anoAtual e o proximo ano é: ". ++$anoAtual ; // Nessa linha de comando, o usuario digita o ano atual e o sistema informa qual será o proximo ano

		echo "<br><br>";

		//VARIAVEL DE REFERENCIA
		$a=3;
		$b=$a;
		$b+=5;
		echo "A variavel A vale $a";
		echo "<br> A variavel B vale $b";		

		echo "<br><br>";

		$a=3;
		$b=&$a; //colocar o & a variavel passa ser uma referencia
		$b+=5;
		echo "A variavel A vale $a";
		echo "<br> A variavel B vale $b";	

		echo "<br><br>";

		//VARIAVEL DE VARIAVEL
		$x="abc";
		$$x="def";
		echo "<br>O conteudo da variavel X é $x";
		echo "<br> A variavel criada recebeu o valor $abc";			

	?>
</body>
</html>

