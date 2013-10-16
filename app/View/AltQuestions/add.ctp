<h1>Cadastro<acronym title="Job Access with Speech"> de Questoes</acronym></h1>
<?php 
	echo $this->Form->create('AltQuestion');

	/*echo $this->Form->input('sexo', array('type'=>'select', 'options' => array(
		'M'=>'Masculino','F'=>'Feminino'),
		'label' =>'Selecione o sexo'));*/
	$options = array('general_question' => 'Conhecimentos gerais',
	 				'area_question' => 'Por área',
	 				'por curso' => 'Por curso:');
	$attributes = array('legend' => false);
	echo $this->Form->radio('teacher', $options, $attributes);
	//echo $this->Form->radio('general_question');
	echo $this->Form->end(__("Salvar"));


?>

<script>
		var valor = document.getElementByName("radio");
		
</script>