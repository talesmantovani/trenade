<div class="textQuestions form">
<?php echo $this->Form->create('TextQuestion'); ?>
	<fieldset>
		<h1>Cadastro de Questões Dissertativas</h1>
	<?php
		echo $this->Form->input('category_id', array(
			'label' => 'Categoria: ',
			'onchange' => 'check(this);',
			'id' => 'category_id'));

		echo $this->Form->input('area_id', array(
			'label' => 'Área: ',
			'id' => 'area_id',
			'disabled'));
		
		echo $this->Form->input('course_id', array(
			'label' => 'Curso: ',
			'id' => 'course_id',
			'disabled'));
		
		echo $this->Form->input('question_text', array(
			'label' => 'Enunciado: '));
		
		echo $this->Form->input('answer_text', array(
			'label' => 'Resposta: '));
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
