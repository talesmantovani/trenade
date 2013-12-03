<?php
	class ExamsController extends AppController{

        public $uses = array('User', 'Exam', 'Course');

        public function index(){
        	$this->set('courses', array('[Selecione]') + $this->Course->find('list'));

        }
    }
?>