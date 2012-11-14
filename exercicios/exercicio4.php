<?php

	/* Utilizando o for() e while():
		a) Mostrar 25x a frase: "Lactobacilos vivos também possuem sentimentos";
		b) Escrever um algoritmo que receba qualquer valor e mostre os valores de 0 até o número digitado. Ex: $var = 3; "0 1 2 3";
		c) capturar dois valores em variáveis e mostrar os números entre eles. Ex: 5 e 10, imprimir: "6 7 8 9";
		d) Escrever um algoritmo que multiplique os números utilizando apenas o operador +, ex: (3 * 5) = 5 + 5 + 5
*/

?>

<!doctype html>

<html>
	<head>
		<meta charset = "UTF-8"/>

		<title>Exercicio 4</title>
			<h1>Exercicio 4</h1>
		</head>
	<body>

<?php
			
			echo "<h2>LETRA A</h2>";			

			for ($i=0; $i < 2 ; $i++) { 
				echo "<p>Lactobacilos vivos também possuem sentimentos </p>";
			}


			echo "<h2>LETRA B</h2>";

			$valor = 3;

			for ($i=0; $i <= $valor; $i++) { 
				echo "<p>$i</p>";
			}

			echo "<h2>LETRA C</h2>";

			$var1 = 5;
			$var2 = 10;

				for ($i=$var1 + 1; $i < $var2  ; $i++) { 
						echo "<p>$i</p>";
					}	
			

			echo "<h2>LETRA D</h2>";

			$valor1 = 3;
			$valor2 = 5; 
			$soma = 0;
			for ($i=0; $i < $valor1  ; $i++) { 
					$soma += $valor2;
				}	
			echo "<p>$soma</p>"




?>

	</body>
</html>			




