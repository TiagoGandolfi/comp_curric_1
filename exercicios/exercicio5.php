<?php

	/* Criar uma função chamada multiplica() e refazer o exercício 4d utilizando essa função.*/

?>

<!doctype html>

<html>
	<head>
		<meta charset = "UTF-8"/>

		<title>Exercicio 5</title>
			<h1>Exercicio 5</h1>
		</head>
	<body>

<?php
			
			
			function multiplica($valor1, $valor2){

				$soma = 0;

				for ($i=0; $i < $valor1  ; $i++) { 
					$soma += $valor2;
				}	
				echo $soma;
			}
			

			multiplica(8,2);



?>

	</body>
</html>			




