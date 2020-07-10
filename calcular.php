<?php

	require_once 'classe/calculadora.php';

	$numero1 = $_POST["n1"];
	$numero2 = $_POST["n2"];
	$operacao = $_POST["operacao"];

	$minhaCalculadora = new calculadora();

	$minhaCalculadora->setNumero1($numero1);
	$minhaCalculadora->setNumero2($numero2);

	switch ($operacao) {
		case 'somar':
			$minhaCalculadora->somar();
			break;
		
		case 'subtrair':
			$minhaCalculadora->subtrair();
			break;
		case 'multiplicar':
			$minhaCalculadora->multiplicar();
			break;
		case 'dividir':
			$minhaCalculadora->dividir();
			break;
		
	}

	echo $minhaCalculadora->getTotal();



  ?>