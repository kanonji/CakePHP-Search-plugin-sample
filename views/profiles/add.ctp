<div class="profiles form">
<?php echo $this->Form->create('Profile');?>
	<fieldset>
 		<legend><?php __('Add Profile'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('location');
		echo $this->Form->input('biography');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Profiles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>