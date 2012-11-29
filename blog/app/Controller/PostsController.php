<?php

	class PostsController extends AppController {

		public $helpers = array('Html','form');
		public $Components = array("Session");

		//action
		// /posts/index
		public function index(){
			$todosAsPostagens = $this->Post->find('all');

			//jogar para VIEW
			$this->set('posts', $todosAsPostagens);

		}

		// /posts/view/3
		public function view($id = null){

			// setar o Post com o id == 3
			$this->Post->id = $id;
			

			//procurar no banco o item com o id 3
			$p = $this->Post->read();


			//enviando para o VIEW os campos do item
			$this->set('post', $p);


		}

		// /posts/add
		public function add() {
		        // se for enviado um POST pegar os dados do form e sarvar no banco
		        if ($this->request->is('post')) {

		        	$dadosDoFormulario = $this->request->data;

		        	//tentar salvar os dados no banco
		        	//se conseguir sarvar, mostar MSG e REDIRECIONAR para o INDEX

		            if ($this->Post->save($dadosDoFormulario)) {
		                // mostrar MSG
		            	$this->Session->setFlash('Postagem inserida com Sucesso');

		            	//redirecionar para o index
		                $this->redirect(array('action' => 'index'));
		            }
		        }
		    }


	}

