<?php echo $this->Form->create('AltQuestion', array('action' => 'edit')); ?>
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
		echo $this->Form->input('answer_id');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>

<script>
function check() {
	if (category_id.selectedIndex==2) {
		document.getElementById('area_id').disabled = false;
		document.getElementById('course_id').disabled = true;
		
	}
	else if (category_id.selectedIndex==3) {
		document.getElementById('area_id').disabled = true;
		document.getElementById('course_id').disabled = false;
	}
	else {
		document.getElementById('area_id').disabled = true;
		document.getElementById('course_id').disabled = true;
	}
}
</script>