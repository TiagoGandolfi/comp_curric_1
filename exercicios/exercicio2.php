<?php

	/* Depois da tag <h1> criar uma div #conteudo e nela adicionar
	o seguinte código PHP:
	$nome1 = “Fulano”;
	$nome2 = “Fulana”;
	$nome3 = “Ciclano”;
	$sexo1 = “M”;
	$sexo2 = “F”;
	$sexo3 = “M”;
	
*/
?>

<!doctype html>

<html>
	<head>
		<meta charset = "UTF-8"/>

		<title>Exercicio 2</title>
			<h1>Exercicio 2</h1>
		</head>
	<body>




	<div #conteudo>
		<?php
			$nome1 = "Fulano";
			$nome2 = "Fulana";
			$nome3 = "Ciclano";
			$sexo1 = "M";
			$sexo2 = "F";
			$sexo3 = "M";

	/*
		a) Concatenar os nomes e imprimir numa tag <p>, e mostrarqual sexo predominante na equipe.
	*/

		
		if ($sexo1 == "F" && $sexo2 == "F" && $sexo3 == "F"){
			$equipe = "equipe formada por meninas";
		}
		
		else if ($sexo1 == "M" && $sexo2 == "M" && $sexo3 == "M"){
			$equipe = "equipe formada por meninos";
		}

		else {
			$equipe = "equipe mista";
		}
			
		
?>

	<p> 
		<?php
				echo $nome1 . ", " . $nome2 . " e " . $nome3 . " constituem uma " .  $equipe
		?>
	</p>	

</div>

	</body>
</html>			




