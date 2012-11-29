<h1>Adicionando Postagem</h1>

<?php
	// criando um formulario atravez de um ajudante form 
	echo $this->Form->create('Post');

	//gerando os inputs atraves do ajudante firn




	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));

	//fechando o formulario e gerando o botao submit

	echo $this->Form->end("Enviar");

