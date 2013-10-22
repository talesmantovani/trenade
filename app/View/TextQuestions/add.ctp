<h1>Cadastro<acronym title="Job Access with Speech"> de Questoes</acronym></h1>
<?php 
	echo $this->Form->create('TextQuestion');

	echo $this->Form->input('categoria', array('options' => array(
		'geral'=>'Conhecimentos gerais', 'area'=>'Por área', 'curso' => 'Por curso'),
		'label' =>'Selecione o sexo'));

	//echo $this->Form->radio('general_question');
	echo $this->Form->end(__("Salvar"));


?>