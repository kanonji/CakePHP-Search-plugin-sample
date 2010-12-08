<div class="grouppsUsers form">
<?php echo $this->Form->create('GrouppsUser');?>
	<fieldset>
 		<legend><?php __('Edit Groupps User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('groupp_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('GrouppsUser.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('GrouppsUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Groupps Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groupps', true), array('controller' => 'groupps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupp', true), array('controller' => 'groupps', 'action' => 'add')); ?> </li>
	</ul>
</div>