<?php
	class AltQuestionsController extends AppController{

        public function index(){

        }

		public function add() {
            //pr($this->AltQuestion->Category->find('list'));
            //exit;

        $this->set('categories', array('[Selecione]') + $this->AltQuestion->Category->find('list'));
        $this->set('areas', array('[Selecione]') + $this->AltQuestion->Area->find('list'));
        $this->set('courses', array('[Selecione]') + $this->AltQuestion->Course->find('list'));
        $this->set('answers', array('[Selecione]') + $this->AltQuestion->Answer->find('list'));

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
    
    /*function dynamic_element($category_id){
        //$dom = new DomDocument;
        if($category_id == 1){
            $dom
        }
    }
    <script>  
    $( "#drop_category" ).change(function() {
        if($("#drop_category").val() == 1){
            $("#idDropDownOculto").css('display', 'block');
        }
        else{
            $("#idDropDownOculto").css('display', 'none');
        }

    });
    </script>*/
              
    
             

	}
?>