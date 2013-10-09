<div>
<h1>Autenticação</h1>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
	<?php 
		echo $this->Form->input('rd', array(
			'label' => 'Registro Docente: '));
		echo $this->Form->input('password', array(
		  	'label' => 'Senha: '));
	?>
<?php echo $this->Form->end(__('Entrar'));?>