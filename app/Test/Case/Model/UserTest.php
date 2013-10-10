<?php
App::uses("User", "Model");

class UserTest extends CakeTestCase {

	public $fixtures = array('app.user');

	public function setUp() {
		parent::setUp();
        $this->User = ClassRegistry::init('User');
    }
	
	public function testNameCannotBeEmpty(){
		$this->User->set(array('User' => array('name' => '')));
		$this->assertFalse($this->User->validates());
	}

	public function testNameCannotBeSpecialCharacter(){
		$this->User->set(array('User' => array('name' => '$%23sdc')));
		$this->assertFalse($this->User->validates());
	}

	public function testRdCannotBeEmpty() {
		$this->User->set(array('User' => array('rd' => '')));
		$this->assertFalse($this->User->validates());
	}

	public function testRdCannotHasLetter() {
		$this->User->set(array('User' => array('rd' => 'ed')));
		$this->assertFalse($this->User->validates());
	}




}
?>