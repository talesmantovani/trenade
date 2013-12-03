<?php
	class StudentsController extends AppController{
        
		public function index(){
            $this->User->recursive = 0;
            $this->set('users', $this->paginate());
		}

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

        public function logout() {
            $this->redirect($this->Auth->logout());
        }

        public function beforeFilter() {
            parent::beforeFilter();
            //$this->Auth->allow('add');
        }
	}
?>