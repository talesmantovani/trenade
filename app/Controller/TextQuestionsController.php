<?php
App::uses('AppController', 'Controller');
/**
 * TextQuestions Controller
 *
 * @property TextQuestion $TextQuestion
 */
class TextQuestionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TextQuestion->recursive = 0;
		$this->set('textQuestions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TextQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid text question'));
		}
		$options = array('conditions' => array('TextQuestion.' . $this->TextQuestion->primaryKey => $id));
		$this->set('textQuestion', $this->TextQuestion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TextQuestion->create();
			if ($this->TextQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The text question has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The text question could not be saved. Please, try again.'));
			}
		}
		$categories = $this->TextQuestion->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TextQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid text question'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
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
		$categories = $this->TextQuestion->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
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
