<?php
	class AltQuestion extends AppModel{
		
		public $belongsTo = array('Category', 'Area', 'Course');
		public $hasMany = array('Answer');
	}
?>