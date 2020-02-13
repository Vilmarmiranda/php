<!DOCTYPE html>
<html>
<head>
	<title>Media dos alunos no php</title>
</head>
<body>
	<?php
		//valores passados por parametros
		$nota1=$_GET["nota1"];
		$nota2=$_GET["nota2"];

		$media=($nota1+$nota2)/2;

		echo "A media da $nota1 e $nota2 é $media <br/> ";

	//	$situacao=($media>6)?"Aprovado":"Reprovado";
	//	echo "A situação do aluno é: $situacao";

		echo "A situação do aluno e: ". (($media>6)?"Aprovado":"Reprovado"); //essa linha substitui as duas linha acima
	?>
</body>
</html>