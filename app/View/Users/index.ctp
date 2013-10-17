<?php 
	echo $this->Form->create('AltQuestion');

	$options = array('general_question' => 'Conhecimentos gerais',
	 				'area_question' => 'Por área',
	 				'por curso' => 'Por curso:');
	$attributes = array('legend' => false);
	echo $this->Form->radio('teacher', $options, $attributes);
	echo $this->Form->input('area', array(
    'options' => array('Computação', 'Exatas', 'Saúde'),
    'empty' => 'Escolha a área'));
	echo $this->Form->end(__("Salvar"));
?>

<script>
		var valor = document.getElementByName("radio");
		
</script>