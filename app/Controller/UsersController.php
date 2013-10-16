<?php
class UsersController extends AppController {

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('<script> alert("Usuario salvo com sucesso!"); </script>', true));
                $this->redirect(array('action' => 'add'));
            } else {
               $this->Session->setFlash(__('<script> alert("O usuário não pode ser salvo."); </script>', true));
            }
        }
    }

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function login(){
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } 
        elseif (empty($this->data)) {
            return;
        }
        else {   
            $this->Session->setFlash(__('<script> alert("Usuário ou senha inválidos."); </script>', true));
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }
}
?>
