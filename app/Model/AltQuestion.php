<?php
	class AltQuestion extends AppModel{
		
		public $belongsTo = array('Category', 'Area', 'Course');
		public $hasMany = array('Answer');

		public $validate = array(
			'question_text' => array(
		        'required' => array(
		        	'rule' => array('notEmpty'),
		        	'message' => 'Insira o enunciado da questão!'
	       		)
	    	),
			'answerA' => array(
				'required' => array(
					'rule' => 'notEmpty',
					'message' => 'Insira o texto da alternativa.'
				)
			),
			'answerB' => array(
				'required' => array(
					'rule' => 'notEmpty',
					'message' => 'Insira o texto da alternativa.'
				)
			),
			'answerC' => array(
				'required' => array(
					'rule' => 'notEmpty',
					'message' => 'Insira o texto da alternativa.'
				)
			),
			'answerD' => array(
				'required' => array(
					'rule' => 'notEmpty',
					'message' => 'Insira o texto da alternativa.'
				)
			),
			'answerE' => array(
				'required' => array(
					'rule' => 'notEmpty',
					'message' => 'Insira o texto da alternativa.'
				)
			)
		);
			

	}
?>