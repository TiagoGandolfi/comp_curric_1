<?php

	/* Utilizando a condição switch():
		a) Caso a $qtd de produtos for zero: mostrar uma mensagem informando que não possui nenhum produto cadastrado;
		b) Caso a $qtd for 1: mostrar a mensagem: "Você possui um Produto cadastrado";
		c) Caso a $qtd for 1, 2 e 3: Mostrar a mensagem: "Você possui vários produtos cadastrados";
		d) Caso não for nenhum desses números, mostrar: "Cadastro inválido, tente novamente";
*/
?>

<!doctype html>

<html>
	<head>
		<meta charset = "UTF-8"/>

		<title>Exercicio 3</title>
			<h1>Exercicio 3</h1>
		</head>
	<body>



<?php
			
		$produtos = 0;


		switch ($produtos) {

			case 0:
				echo "<p> Não possui nenhum produto cadastrado. </p>";
				break;
			
			case 1:
				echo "<p> Você possui um produto cadastrado. </p>";
				break;			

			case $produtos == 2 || $produtos == 3 :
				echo "<p> Você possui varios produtos cadastrado. </p>";
				break;

			default:
				echo "<p> Cadastro invalido, tente novamente.</p>";
				break;
			
		}


?>




	</body>
</html>			