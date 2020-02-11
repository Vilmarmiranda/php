<?php 

	$idade=13;	

	$idadeCrianca=12;
	$idadeMaior=18;
	$idadeMelhor=65;

	if($idade<$idadeCrianca){
		echo "Ola Crianca";

	}else if($idade<$idadeMaior){
		echo "Ola Adolescente";

	}else if($idade<$idadeMelhor) {
		echo "Ola Adulto";

	}else{
		echo "Ola Idoso";
	}


 ?>