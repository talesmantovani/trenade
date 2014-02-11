<?php
	class Category extends AppModel{
		//teste

		//public $hasMany = array('AltQuestions');
		public $hasMany = array('Areas', 'Courses');
	}
?>