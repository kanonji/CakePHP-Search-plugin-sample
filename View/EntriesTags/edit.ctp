<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('EntriesTag', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Entries Tag')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('entry_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('tag_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->hidden('id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EntriesTag.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EntriesTag.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries Tags')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries')), array('controller' => 'entries', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Entry')), array('controller' => 'entries', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Tags')), array('controller' => 'tags', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Tag')), array('controller' => 'tags', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>