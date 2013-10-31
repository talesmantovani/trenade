<?php echo $this->Form->create('AltQuestion', array('action' => 'edit')); ?>
<?php echo $this->Form->hidden('id'); ?>
	<fieldset>
		<legend><?php echo __('Editar Questões Alternativas'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('area_id');
		echo $this->Form->input('course_id');
		echo $this->Form->input('question_text');
		echo $this->Form->input('answerA');
		echo $this->Form->input('answerB');
		echo $this->Form->input('answerC');
		echo $this->Form->input('answerD');
		echo $this->Form->input('answerE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>