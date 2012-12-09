<?php

	class EtiquetasController extends AppController {

		public $helpers = array('Html','form');
		public $Components = array("Session");

		//action
		// /posts/index
		public function index(){
				
			$this->paginate = array('limit' => 8);	

			$todosAsEtiquetas = $this->paginate('Etiqueta');

			//$todosAsPostagens = $this->Post->find('all');


			//jogar para VIEW
			$this->set('etiquetas', $todosAsEtiquetas);

		}

		// /posts/view/3
		public function view($id = null){

			// setar o Post com o id == 3
			$this->Etiqueta->id = $id;
			

			//procurar no banco o item com o id 3
			$p = $this->Etiqueta->read();


			//enviando para o VIEW os campos do item
			$this->set('etiquetas', $p);


		}

		// /posts/add
		public function add() {
		        // se for enviado um POST pegar os dados do form e sarvar no banco
		        if ($this->request->is('etiquetas')) {

		        	$dadosDoFormulario = $this->request->data;

		        	//tentar salvar os dados no banco
		        	//se conseguir sarvar, mostar MSG e REDIRECIONAR para o INDEX

		            if ($this->Etiqueta->save($dadosDoFormulario)) {
		                // mostrar MSG
		            	$this->Session->setFlash('Etiqueta inserida com Sucesso','flash_success');

		            	//redirecionar para o index
		                $this->redirect(array('action' => 'index'));
		            }
		        }
		    }



		function edit($id = null) {
			    $this->Etiqueta->id = $id;
			    if ($this->request->is('get')) {
			        $this->request->data = $this->Etiqueta->read();
			    } else {
			        if ($this->Etiqueta->save($this->request->data)) {
			            $this->Session->setFlash('Etiqueta atualizada com sucesso.','flash_success');
			            $this->redirect(array('action' => 'index'));
			        }
			    }
			}

    	

		function delete($id) {
			    if (!$this->request->is('etiquetas')) {
			        throw new MethodNotAllowedException();
			    }
			    if ($this->Etiqueta->delete($id)) {
			        $this->Session->setFlash('Etiqueta ' . $id . ' deletada.','flash_success');
			        $this->redirect(array('action' => 'index'));
			    }
			}





	}

