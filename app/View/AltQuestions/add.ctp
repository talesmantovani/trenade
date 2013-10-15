<h1>Cadastro de Questões</h1>
<?php 
	echo $this->Form->create('Question');

	/*echo $this->Form->input('sexo', array('type'=>'select', 'options' => array(
		'M'=>'Masculino','F'=>'Feminino'),
		'label' =>'Selecione o sexo'));*/
	$options = array('geral' => 'Conhecimentos gerais',
	 				'area' => 'Por área',
	 				'especifica' => 'Por curso:');
	$attributes = array('legend' => false);
	echo $this->Form->radio('answerA', $options, $attributes);
	echo $this->Form->end(__("Salvar"));


?>

<script>
		var valor = document.getElementByName("radio");
		
</script>