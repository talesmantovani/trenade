<?php 
	echo $this->Form->create('AltQuestion');
	echo $this->Form->input('category_id');
	echo $this->Form->end(__('Salvar'));
?>