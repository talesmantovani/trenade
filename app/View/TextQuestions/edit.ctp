<div class="textQuestions form">
<?php echo $this->Form->create('TextQuestion'); ?>
<?php echo $this->Form->hidden('id'); ?>
	<fieldset>
		<legend><?php echo __('Editar Questões Dissertativas'); ?></legend>
	<?php
		//echo $this->Form->input('category_id');
		//echo $this->Form->input('area_id');
		//echo $this->Form->input('course_id');
		echo $this->Form->input('question_text');
		echo $this->Form->input('answer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>