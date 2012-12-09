<h1>Adicionando Postagem</h1>

<?php
	// criando um formulario atravez de um ajudante form 
	echo $this->Form->create('Etiqueta');

	//gerando os inputs atraves do ajudante firn




	echo $this->Form->input('titulo');
	echo $this->Form->input('tipo');
	echo $this->Form->input('cor');
	

	//fechando o formulario e gerando o botao submit

	echo $this->Form->end("Enviar");

