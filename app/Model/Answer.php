<?php
	class Answer extends AppModel{
		public $belongsTo = array('AltQuestions');
		//public $hasMany = array('AltQuestions', 'TextQuestions');
	}
?>