<?php
	class AltQuestionsController extends AppController{

		public function add() {
			if ($this->request->is('post')) {
            $this->AltQuestion->create();
            if ($this->AltQuestion->save($this->request->data)) {
                $this->Session->setFlash(__('<script> alert("sucesso!"); </script>', true));
                $this->redirect(array('action' => 'add'));
            } else {
               $this->Session->setFlash(__('<script> alert("não pode ser salvo."); </script>', true));
            }
        }

		}

	}
?>