<?php
App::uses("AltQuestion", "Model");

class AltQuestionTest extends CakeTestCase {

	//public $fixtures = array('app.alt_question');

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

	public function testCategoryIdCannotBeZero(){
		$this->AltQuestion->set(array('AltQuestion' => array('category_id' => '0', 'area_id' => '', 'course_id' => '', 'answer_id' => '0')));
		$this->assertFalse($this->AltQuestion->verificaIndices());
	}

	public function testCategoryIdShouldBeDiferentOfZero(){
		$this->AltQuestion->set(array('AltQuestion' => array('category_id' => '1', 'area_id' => '', 'course_id' => '', 'answer_id' => '')));
		$this->assertTrue($this->AltQuestion->verificaIndices());
	}

	public function testAreaIdShouldBeDiferentOfZeroIfCategoryIdEqualToTwo(){
		$this->AltQuestion->set(array('AltQuestion' => array('category_id' => '2', 'area_id' => '1', 'course_id' => '', 'answer_id' => '')));
		$this->assertTrue($this->AltQuestion->verificaIndices());
	}

	public function testAreaIdCannotBeZeroIfCategoryIdEqualToTwo(){
		$this->AltQuestion->set(array('AltQuestion' => array('category_id' => '2', 'area_id' => '0', 'course_id' => '', 'answer_id' => '')));
		$this->assertFalse($this->AltQuestion->verificaIndices());
	}

	public function testCourseIdShouldBeDiferentOfZeroIfCategoryIdEqualToThree(){
		$this->AltQuestion->set(array('AltQuestion' => array('category_id' => '3', 'area_id' => '', 'course_id' => '1', 'answer_id' => '')));
		$this->assertTrue($this->AltQuestion->verificaIndices());
	}

	public function testCourseIdCannotBeZeroIfCategoryIdEqualToThree(){
		$this->AltQuestion->set(array('AltQuestion' => array('category_id' => '3', 'area_id' => '', 'course_id' => '0', 'answer_id' => '')));
		$this->assertFalse($this->AltQuestion->verificaIndices());
	}

	public function testAnswerCannotBeZero(){
		$this->AltQuestion->set(array('AltQuestion' => array('category_id' => '0', 'area_id' => '0', 'course_id' => '0', 'answer_id' => '0')));
		$this->assertFalse($this->AltQuestion->verificaIndices());
	}

}
?>