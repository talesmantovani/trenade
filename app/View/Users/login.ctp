<h1>Autenticação</h1>
<?php //echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
	<fieldset>
		<?php 
		echo $this->Form->input('rd', array(
			'label' => 'Registro Docente: ',
			'type' => 'text'));
		echo $this->Form->input('password', array(
		  	'label' => 'Senha: '));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Entrar'));?>