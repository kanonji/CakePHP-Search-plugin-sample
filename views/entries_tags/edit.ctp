<div class="entriesTags form">
<?php echo $this->Form->create('EntriesTag');?>
	<fieldset>
 		<legend><?php __('Edit Entries Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entry_id');
		echo $this->Form->input('tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EntriesTag.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EntriesTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entries Tags', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>