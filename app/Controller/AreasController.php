<?php
class AreasController extends AppController {
	public function index() {

	}

	public function add() {
		if ($this->request->is('post')) {
            if ($this->Area->save($this->request->data)) {
                $this->Session->setFlash(__('<script> alert("sucesso!"); </script>', true));
                $this->redirect(array('action' => 'index'));
            } else {
               $this->Session->setFlash(__('<script> alert("não pode ser salvo."); </script>', true));
            }
        }
	}
}