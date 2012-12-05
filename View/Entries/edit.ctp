<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Entry', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Entry')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('user_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('label');
				echo $this->BootstrapForm->input('body');
				echo $this->BootstrapForm->input('pageview');
				echo $this->BootstrapForm->input('is_running');
				echo $this->BootstrapForm->hidden('id');
				echo $this->BootstrapForm->input('Tag');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Entry.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Entry.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Tags')), array('controller' => 'tags', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Tag')), array('controller' => 'tags', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>