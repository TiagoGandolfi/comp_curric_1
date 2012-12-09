<?php

	class Etiquetas extends AppModel {


    public $name = 'etiquetas';

    public $validate = array(
        'titulo' => array(
            'rule' => 'notEmpty'
        ),
        'tipo' => array(
            'rule' => 'notEmpty'
        ),

        'cor' => array(
            'rule' => 'notEmpty'
        )
    );
}
	