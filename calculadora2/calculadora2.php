<?php 

$valor1 = 7056;
$valor2 = 34;
$op=1;


function somaValor($num1,$num2){
    return ($num1+$num2); 
}

function subtracaoValor($num1,$num2){
    $result = $num1-$num2;
}

function divisaoValor($num1,$num2){
    if ($num2 == 0 || $num1 == 0){
    $result = "NaN";
    }else    {
   	$result = $num1/$num2;

    }
}

function multiplicacaoValor($num1,$num2){
    $result = $num1*$num2;
}

function resultado($result){
	echo $result;
}

echo "Digite dois números:<br>
Escolha uma função:<br>
------------------------------------<br>
[1] Soma<br>
[2] Subtração<br>
[3] Multiplicação<br>
[4] Divisão<br>
------------------------------------<br>
";
switch ($op) {
	case '1':
		$op = "Soma";
		echo "Você escolheu soma:<br>". $valor1 ." + ". $valor2 ;	
		echo "<br>------------------------------------";
		$resultado = somaValor($valor1, $valor2);
		echo "<br>$resultado";

		break;

		case '2':
		echo "Você escolheu subtração:<br>". $valor1 ." - ". $valor2;
		echo "<br>------------------------------------";		
		subtracaoValor($valor1, $valor2);

		break;

		case '3':
		echo "Você escolheu multiplicação:<br>". $valor1 ." x ". $valor2;
		echo "<br>------------------------------------";
		multiplicacaoValor($valor1, $valor2);

		break;

		case '4':
		echo "Você escolheu divisão:<br>". $valor1 ." / ". $valor2;
		echo "<br>------------------------------------";
		divisaoValor($valor1, $valor2);

		break;
	
	default:
		 echo "Número inválido";
		break;
}


?>
