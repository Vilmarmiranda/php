<!DOCTYPE html>
<html>
<head>
	<title>veja se voce e obrigado a votar</title>
</head>
<body>
	<?php
		//RECEBER O ANO DE NASCIMENTO POR PARAMETRO
		$anoNasc=$_GET["nasc"];

		$idade = 2020-$anoNasc;

		echo "Quem nasceu em $anoNasc, tem idade de $idade anos. Voce tem o voto: ". (($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO");
	//	echo "Quem nasceu em $anoNasc tem idade de $idade anos. ";

	?>
</body>
</html>