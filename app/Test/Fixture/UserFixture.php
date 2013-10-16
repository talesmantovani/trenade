<?php
class UserFixture extends CakeTestFixture {
    public $import = 'User';

    var $records = array(

        array(
        	'id' => 1, 
        	'rd' => '000111', 
            'name' => 'teste',
            'password' => '111',
        	'email' => 'teste@teste', 
            'admin' => 1
        ),

        array(
            'id' => 2, 
            'rd' => '000222', 
            'name' => 'teste2',
            'password' => '222',
            'email' => 'teste2@teste', 
            'admin' => 0
        )
    );
}
?>    	