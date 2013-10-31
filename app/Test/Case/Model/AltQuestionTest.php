<?php
App::uses("AltQuestion", "Model");

class AltQuestionTest extends CakeTestCase {

	public $fixtures = array('app.alt_question');

	public function setUp() {
		parent::setUp();
        $this->AltQuestion = ClassRegistry::init('AltQuestion');
    }
	
	public function testQuestionTextCannotBeEmpty(){
		$this->AltQuestion->set(array('AltQuestion' => array('question_text' => '')));
		$this->assertFalse($this->AltQuestion->validates());
	}

	public function testAnswerACannotBeEmpty(){
		$this->AltQuestion->set(array('AltQuestion' => array('answerA' => '')));
		$this->assertFalse($this->AltQuestion->validates());
	}

	public function testAnswerBCannotBeEmpty(){
		$this->AltQuestion->set(array('AltQuestion' => array('answerB' => '')));
		$this->assertFalse($this->AltQuestion->validates());
	}

	public function testAnswerCCannotBeEmpty(){
		$this->AltQuestion->set(array('AltQuestion' => array('answerC' => '')));
		$this->assertFalse($this->AltQuestion->validates());
	}

	public function testAnswerDCannotBeEmpty(){
		$this->AltQuestion->set(array('AltQuestion' => array('answerD' => '')));
		$this->assertFalse($this->AltQuestion->validates());
	}

	public function testAnswerECannotBeEmpty(){
		$this->AltQuestion->set(array('AltQuestion' => array('answerE' => '')));
		$this->assertFalse($this->AltQuestion->validates());
	}

}
?>