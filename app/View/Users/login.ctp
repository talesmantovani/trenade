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
