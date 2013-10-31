<?php
App::uses('AppController', 'Controller');

class TextQuestionsController extends AppController {

	public $uses = array('User', 'TextQuestion');

	public function index() {
		$this->TextQuestion->recursive = 0;
		$this->set('textQuestions', $this->paginate());

		$users = $this->TextQuestion->find('all', 
                array(
                    'conditions' => array(
                        'TextQuestion.user_id' => $this->Auth->user('id'),
                        ),
                    'order' => array('TextQuestion.id asc')
                    ));
            
		$this->set(compact(array('users')));
	}

	public function view($id = null) {
		if (!$this->TextQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid text question'));
		}
		$options = array('conditions' => array('TextQuestion.' . $this->TextQuestion->primaryKey => $id));
		$this->set('textQuestion', $this->TextQuestion->find('first', $options));
	}

	public function add() {
		$this->set('categories', array('[Selecione]') + $this->TextQuestion->Category->find('list'));
        $this->set('areas', array('[Selecione]') + $this->TextQuestion->Area->find('list'));
        $this->set('courses', array('[Selecione]') + $this->TextQuestion->Course->find('list'));

		if ($this->request->is('post')) {
			//$this->TextQuestion->create();
			$this->request->data['TextQuestion']['user_id'] = $this->Auth->user('id');
			if ($this->TextQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('<script> alert("Questão salva com sucesso!."); </script>', true));
				$this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('<script> alert("Não pode ser salvo."); </script>', true));
			}
		}

		
	}

	public function edit($id=null) {
		$this->TextQuestion->id = $id;
		 if (empty($this->data)) {
            $this->data = $this->TextQuestion->find('first', array('conditions' => array('id' => $id)));
            
        }
        else{
                $this->TextQuestion->save($this->data);
                $this->redirect('index');
        }
      
    }
		/*if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TextQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The text question has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The text question could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TextQuestion.' . $this->TextQuestion->primaryKey => $id));
			$this->request->data = $this->TextQuestion->find('first', $options);
		}
		$this->set('categories', array('[Selecione]') + $this->TextQuestion->Category->find('list'));
        $this->set('areas', array('[Selecione]') + $this->TextQuestion->Area->find('list'));
        $this->set('courses', array('[Selecione]') + $this->TextQuestion->Course->find('list'));*/

	public function delete($id = null) {
		$this->TextQuestion->id = $id;
		if (!$this->TextQuestion->exists()) {
			throw new NotFoundException(__('Invalid text question'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TextQuestion->delete()) {
			$this->Session->setFlash(__('Text question deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Text question was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
