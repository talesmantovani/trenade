<h1>Cadastro de Questões Alternativas</h1>
<?php 
	echo $this->Form->create('AltQuestion', array(
		'action' => 'add'));
	
	echo $this->Form->input('category_id', array(
		'label' => 'Categoria: ', 
		'onchange' => 'check(this);', 
		'id' => 'category_id'));

	echo $this->Form->input('area_id', array(
		'label' => 'Área: ', 
		'disabled', 
		'id' => 'area_id'));

	echo $this->Form->input('course_id', array(
		'label' => 'Curso: ', 
		'disabled', 
		'id' => 'course_id'));

	echo $this->Form->input('question_text', array(
		'label' => 'Enunciado: '));

	echo $this->Form->input('answerA', array(
		'label' => 'A): '));

	echo $this->Form->input('answerB', array(
		'label' => 'B): '));

	echo $this->Form->input('answerC', array(
		'label' => 'C): '));

	echo $this->Form->input('answerD', array(
		'label' => 'D): '));

	echo $this->Form->input('answerE', array(
		'label' => 'E): '));

	echo $this->Form->input('answer_id', array(
		'label' => 'Resposta correta: '));

	echo $this->Form->end(__('Salvar'));

	echo $this->Html->link(__('Editar Questões Dissertativas'), array('action' => 'edit'));
?>

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
