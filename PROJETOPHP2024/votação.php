<?php

	include("cabeçalho.php");

	$idade = 16;

	if ($idade < 16) {
		include ("votação_menor.php");
	}
	elseif ($idade < 18) {
		include("votação_16.php");
	}
	else {
		include ("votação_maior.php");
	}

	include ("rodapé.php")";


?>