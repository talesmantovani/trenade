<div class="textQuestions view">
<h2><?php  echo __('Text Question'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($textQuestion['TextQuestion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($textQuestion['TextQuestion']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($textQuestion['Category']['name'], array('controller' => 'categories', 'action' => 'view', $textQuestion['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area Id'); ?></dt>
		<dd>
			<?php echo h($textQuestion['TextQuestion']['area_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Id'); ?></dt>
		<dd>
			<?php echo h($textQuestion['TextQuestion']['course_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question Text'); ?></dt>
		<dd>
			<?php echo h($textQuestion['TextQuestion']['question_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('General Question'); ?></dt>
		<dd>
			<?php echo h($textQuestion['TextQuestion']['general_question']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer'); ?></dt>
		<dd>
			<?php echo h($textQuestion['TextQuestion']['answer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($textQuestion['TextQuestion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($textQuestion['TextQuestion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Text Question'), array('action' => 'edit', $textQuestion['TextQuestion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Text Question'), array('action' => 'delete', $textQuestion['TextQuestion']['id']), null, __('Are you sure you want to delete # %s?', $textQuestion['TextQuestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Text Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Text Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
