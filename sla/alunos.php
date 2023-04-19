<?php 

	$alunos  = array("Maria" => 9,"José" => 6, "Pedro" => 7, "Ana" => 9, "Luiza" => 10, "João" => 5, "Kayo" => 4, "Astrogildo" => 7, "Berisvaldo" => 5, "Célio" => 8);

	$soma=0;
	$cont=0;
	$maior=0;

	foreach ($alunos as $key) {
		$soma = $soma + $key;
		$cont++;
	}
	$med=$soma/$cont;
	echo $med;
	$opt=0;
	while ($opt == 0) {
		$opt=0;
		foreach ($alunos as $key) {
		if ($key>$maior) {
			$maior = $key;
			$opt++;
		}
	}
	echo "<br/>".$maior;

	}
	 ?>