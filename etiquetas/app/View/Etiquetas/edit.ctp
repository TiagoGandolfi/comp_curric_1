<h1>Alterando Etiquetas</h1>

<?php
	echo $this->Form->create('Etiqueta', array('action' => 'edit'));
    echo $this->Form->input('titulo');
    echo $this->Form->input('tipo');
    echo $this->Form->input('cor');
        echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Etiqueta');

