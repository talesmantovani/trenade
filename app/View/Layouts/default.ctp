<!DOCTYPE html>
<html>
<head>
	<?php 
		echo $this->Html->css('jquery-ui.css');
		echo $this->Html->css('/development-bundle/themes/smoothness/jquery-ui.css');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->script('jquery-1.9.1.js');
		echo $this->Html->script('jquery-ui.js');
		echo $this->Html->script('trenade.js');
		echo $this->Html->css('style.css');
	?>
</head>

<body>
	<div class="wrap">
		<?php echo $this->Session->flash(); ?>
		
		<div class="sidebar">
			<div class="menu">
				<img src="img/logo-trenade.png">
				<ul>
					<li><a class="icon-alternativas" href="">Questões alternativas</a></li>
					<li><a class="icon-dissertativas" href="">Questões dissertativas</a></li>
				</ul>
			</div>
			<div class="submenu">
			<ul>
				<li>Questões alternativas</li>
					<ul>
						<li>
							<?php
								echo $this->Html->link(__('Adicionar'), array(
								'controller' => 'AltQuestions', 'action' => 'add'));
							?>
						</li>
						<li><?php
								echo $this->Html->link(__('Gerenciar'), array(
								'controller' => 'AltQuestions', 'action' => 'index'));
							?>
						</li>
					</ul>
				<li>Questões dissertativas</li>
					<ul>
						<li>
							<?php
								echo $this->Html->link(__('Adicionar'), array(
								'controller' => 'TextQuestions', 'action' => 'add'));
							?>
						</li>
						<li><?php
								echo $this->Html->link(__('Gerenciar'), array(
								'controller' => 'TextQuestions', 'action' => 'index'));
							?>
						</li>
					</ul>
			</ul>
			</div>
		</div>
		<div class="content">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>