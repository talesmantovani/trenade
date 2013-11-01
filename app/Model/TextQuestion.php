<?php
App::uses('AppModel', 'Model', 'Controller/Component');
class TextQuestion extends AppModel {


	public $validates = array(
			'question_text' => array(
		        'required' => array(
		        	'rule' => array('notEmpty'),
		        	'message' => 'Digite o registro!'
	       		)	
			),
			'answer_text' => array(
				'required' => array(
					'rule' => 'notEmpty',
					'message' => 'Insira uma resposta para a questão!'
				)
			)
		);

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


			
}
