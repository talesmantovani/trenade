<h1>Cadastro<acronym title="Job Access with Speech"> de Questoes</acronym></h1>
<?php 
	echo $this->Form->create('TextQuestion');

	echo $this->Form->input('name_categoria', array('options' => array(
		'geral'=>'Conhecimentos gerais', 'area'=>'Por área', 'curso' => 'Por curso'),
		'label' =>'Selecione a categoria',
		'empty' => 'Selecione uma categoria'));

	echo $this->Form->input('name_area', array('options' => array(
		'comp'=>'Computação', 'saude'=>'Saúde', 'humanas' => 'Humanas'),
		'label' =>'Selecione a area',
		'empty' => 'Selecione uma area'));

	echo $this->Form->input('name_course', array('options' => array(
		'sist'=>'Sistemas de Informação', 'engC'=>'Engenharia da computação', 'engM' => 'Engenharia Mecânica'),
		'label' =>'Selecione o curso',
		'empty' => 'Selecione um curso'));

	echo $this->Form->end(__("Salvar"));


?>