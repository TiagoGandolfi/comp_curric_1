<?php

	/* Criar um formulário HTML que tenha os campos abaixo e depois de submeter o formulário através de POST, utilizar o PHP 
	para mostrar todos os dados submetidos:
	a) hidden
	b) text
	c) password
	d) textarea
	e) checkbox
	f) radio
	g) select
*/

?>

<!doctype html>

<html>
	<head>
		<meta charset = "UTF-8"/>

		<title>Exercicio 9</title>
			<h1>Exercicio 9</h1>
		</head>
	<body>

<form>
	formulario tipo hidden </br>
<input type="hidden" name="hidden" value="aux">
</br>
</br>

<form>
	formulario tipo texto:</br>
<input type="text" name="texto">
</br>
</br>

formulario tipo password: </br>

<input type="password" name="senha">
</form>
</br>

<form>
	formulario tipo textarea: </br>
<textarea rows="10" cols="100">
</textarea> 
</br>
</br

<form>
	formulario tipo checkbox:
</br>
<form>
<input type="checkbox" name="opc1">
	Opção 1
</form>
<input type="checkbox" name="opc2">
	Opção 2
</form>
</br>
</br>

<form>
	formulario tipo radio: </br>
<input type="radio" name="opc" value="opc1"> Opção 2
<br>
<input type="radio" name="opc" value="opc2"> Opção 1
</br>
</br>

<form>
	formulario tipo select:
</br>
<select name="opcoes">
<option value="opcao1">opcao1
<option value="opcao2">opcao2
<option value="opcao3">opcao3
</select>
</form>




	</body>
</html>			




