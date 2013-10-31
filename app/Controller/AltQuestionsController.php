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
                    $this->Session->setFlash(__('<script> alert("Questão adicionada com sucesso!"); </script>', true));
                    $this->redirect(array('action' => 'add'));
                } else {
                   $this->Session->setFlash(__('<script> alert("Não pode ser salvo"); </script>',true));
                }
            }

		}  

    public function edit($id=null) {
        $this->AltQuestion->id = $id;
        $this->set('categories', array('[Selecione]') + $this->AltQuestion->Category->find('list'));
        $this->set('areas', array('[Selecione]') + $this->AltQuestion->Area->find('list'));
        $this->set('courses', array('[Selecione]') + $this->AltQuestion->Course->find('list'));

        if($this->request->isPost()) {
            if ($this->AltQuestion->save($this->request->data)) {
                $this->Session->setFlash('<script> alert("Questão editada com sucesso!"); </script>', true);
                $this->redirect(array('action' => 'index', $this->AltQuestion->id));
            }
        }
        else{
            $this->request->data = $this->AltQuestion->read();
        }

    }

    public function delete ($id){
        $this->AltQuestion->delete($id);
        $this->redirect(array(
            'controller' => 'users', 
            'action' => 'index'));

    }
}
?>