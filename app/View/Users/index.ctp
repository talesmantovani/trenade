<h1>Trenade</h1>
<br>
	<fieldset>
		<legend><?php echo __('Questões Alternativas'); ?></legend>
	<?php
		echo $this->Html->link(__('Adicionar'), array('controller' => 'AltQuestions', 'action' => 'add'));
		echo "<br>";
		echo $this->Html->link(__('Gerenciar'), array('controller' => 'AltQuestions', 'action' => 'index'));
	?>
	</fieldset>

	<fieldset>
		<legend><?php echo __('Questões Dissertativas'); ?></legend>
	<?php
		echo $this->Html->link(__('Adicionar'), array('controller' => 'TextQuestions', 'action' => 'add'));
		echo "<br>";
		echo $this->Html->link(__('Gerenciar'), array('controller' => 'TextQuestions', 'action' => 'index'));
	?>
	</fieldset>