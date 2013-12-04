<?php
	class UsersController extends AppController{
        
		public function index(){
            $this->User->recursive = 0;
            $this->set('users', $this->paginate());
		}
        /*
        public function login(){
            $this->layout = 'login';
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            }
            elseif (empty($this->data)) {
                return;
            } else {   
                $this->Session->setFlash(__('<script> alert("Usuário ou senha inválidos."); </script>', true));
                $this->request->data = null;
            }
        }
        */
        public function login() {
            $this->layout = 'login';
            if ($this->Auth->login()) {
                if ($this->Auth->user('teacher')){
                    $this->redirect(array('controller' => 'teachers', 'action' => 'index'));  
                }
                else {
                    return;
                }
            }

            elseif (empty($this->data)) {
                return;
            }

            else {
                $this->Session->setFlash(__('<script> alert("Registro ou senha inválidos, tente novamente."); </script>', true));
                $this->request->data = null;
            }
        }

        public function logout() {
            $this->redirect($this->Auth->logout());
        }

        public function beforeFilter() {
            parent::beforeFilter();
            //$this->Auth->allow('add');
        }


		public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('<script> alert("Usuário salvo com sucesso!"); </script>', true));
                $this->redirect(array('action' => 'add'));
            } else {
               $this->Session->setFlash(__('<script> alert("O usuário não pode ser salvo."); </script>', true));
            }
        }
    }

	}
?>