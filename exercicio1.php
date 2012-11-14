<!doctype html>

<html>
	<head>
		<meta charset = "UTF-8"/>
		<title>"Exercicio 1"</title>
	</head>
	<body>


<?php

	$var1 = 1;
	$var2 = 9;
	$var3 = 4;


	if ($var1 >= $var2 && $var1 >= $var3){
		$maior = $var1;

	}

	if ($var2 >= $var1 && $var2 >= $var1){
		$maior = $var2;

	}
	
	if ($var3 >= $var1 && $var3 >= $var2){
		$maior = $var3;

	}

	if ($var1 <= $var2 && $var1 <= $var3){
		$menor = $var1;

	}

	if ($var2 <= $var1 && $var2 <= $var1){
		$menor = $var2;

	}
	
	if ($var3 <= $var1 && $var3 <= $var2){
		$menor = $var3;

	}

?>


	<p>	
	
		<h1>Faca um programa que compare o valor de 3 variaveis, apresentando qual é o maior e qual é o menor.</h1>

	</p>


<?php

	echo "O MENOR VALOR E " . $menor; 
	echo "O MAIOR VALOR E " . $maior;

?>


<!--
faca um programa que compare o valor de 3 variaveis, apresentando qual e o maior e qual e o menor

faca um programa que calcule a media de 4 numeros, mostrando a mensagem OK se a media for maior iguar a 6 e EXAME se for menor que 6

faca um progama que exiba o resultado da multiplicacao de 2 pelos primeiros 10 numeros naturais 

faca um progama que exiba o resultado da multiplicacao de 2 pelos primeiros 10 numeros pares

faca um programa para aprovar o emprestimo bancario para compra de uma casa. O programa deve guarda o valor da casa a comprar,
o salario e a quantidade de anos a pagar. O valor da prestacao se pode ser superior a 30 % do salario. Calcule o valor da 
prestacao como sendo o vador da casa a comprar dividido pelo numero de meses a pagar.
-->

</body>
</html>			



