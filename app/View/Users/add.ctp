<h1>Cadastrar Usuário</h1>
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('name', array(
		'label' => 'Nome do professor: '));
	echo $this->Form->input('rd', array(
		'label' => 'Registro do professor: '));
	echo $this->Form->input('email', array(
		'label' => 'E-mail: '));
	echo $this->Form->input('password', array(
		'label' => 'Senha: '));
	echo $this->Form->input('confirm_password', array(
		'label'=>'Confirmação da senha', 'type' => 'password'));
	echo $this->Form->end(__("Salvar"));

?>