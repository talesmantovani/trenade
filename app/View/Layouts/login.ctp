<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<?php
			echo $this->Html->css('jquery-ui.css');
			echo $this->Html->css('/development-bundle/themes/smoothness/jquery-ui.css');
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->script('jquery-1.9.1.js');
			echo $this->Html->script('jquery-ui.js');
			echo $this->Html->script('trenade.js');
			echo $this->Html->script('jquery.js');
			echo $this->Html->css('stylelogin');
		?>
		<?php echo $this->Session->flash('auth'); ?>
	</head>
	<body>
		<div class="wrap">
			<p id="logo-login"></p>
			<div class="fields">
				<?php echo $this->Form->create('User');?>
				<?php 
					echo $this->Form->input('username', array(
						'label' => 'Login: ',
						'type' => 'text'));
					echo $this->Form->input('password', array(
					  	'label' => 'Senha: ',
					  	'id' => ''));
				?>
				<?php echo $this->Form->end(__('Entrar')); ?>
			</div>
		</div>		
	</body>
</html>