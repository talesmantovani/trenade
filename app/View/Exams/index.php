
<h1>Gerar Simulado</h1>
<?php

	echo $this->Form->input('course_id', array(
		'label' => 'Curso: ', 
		'disabled', 
		'id' => 'course_id'));

	echo $this->Form->end(__('Gerar simulado'));

?>