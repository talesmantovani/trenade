<?php
	class AltQuestion extends AppModel{
	

		public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Area' => array(
			'className' => 'Area',
			'foreignKey' => 'area_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'course_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

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