<?php
	class AltQuestionsController extends AppController{

        public function index(){
            $this->AltQuestion->recursive = 0;
            $this->set('AltQuestions', $this->paginate());

            $users = $this->AltQuestion->find('all', 
                    array(
                        'conditions' => array(
                            'AltQuestion.user_id' => $this->Auth->user('id'),
                            ),
                        'order' => array('AltQuestion.id asc')
                        ));
                
            $this->set(compact(array('users')));

        }

		public function add() {

        $this->set('categories', array('[Selecione]') + $this->AltQuestion->Category->find('list'));
        $this->set('areas', array('[Selecione]') + $this->AltQuestion->Area->find('list'));
        $this->set('courses', array('[Selecione]') + $this->AltQuestion->Course->find('list'));
        $this->set('answers', array('[Selecione]') + $this->AltQuestion->Answer->find('list'));

			if ($this->request->is('post')) {
            //$this->AltQuestion->create();
                $this->request->data['AltQuestion']['user_id'] = $this->Auth->user('id');
                if ($this->AltQuestion->save($this->request->data)) {
                    $this->Session->setFlash(__('<script> alert("sucesso!"); </script>', true));
                    $this->redirect(array('action' => 'add'));
                } else {
                   $this->Session->setFlash(__('<script> alert("não pode ser salvo."); </script>', true));
                }
            }

		}  

    public function edit($id=null) {
        $this->AltQuestion->id = $id;
        if (empty($this->data)) {
            $this->data = $this->AltQuestion->find('first', array('conditions' => array('id' => $id)));
        
        }
        else{
                $this->User->save($this->data);
                $this->redirect('index');
        }

	}
}
?>