<?php
	
	$entrar = array(
    'label' => 'Entrar',
    
        'class' => 'btn btn-large btn-block  btn-success',
    );

    $input_login = array(
    	'placeholder' => 'Login',
    	'type' => 'text',
    	'class' => 'input_login');

    $input_password = array(
    	'placeholder' => 'Senha',
    	'type' => 'password',
    	'id' => '',
    	'class' => 'input_login');
    
?>

<div class="wrap">
	<p id="logo-login"></p>
	<div class="fields">
		<?php echo $this->Form->create('User');?>
		<?php 
			echo $this->Form->input('username', $input_login);
			echo $this->Form->input('password', $input_password);
		?>

		<?php echo $this->Form->end($entrar); ?>
	</div>
</div>
