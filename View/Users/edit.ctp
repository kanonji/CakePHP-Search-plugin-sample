<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('User', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('User')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('username', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('email', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('label');
				echo $this->BootstrapForm->input('password');
				echo $this->BootstrapForm->hidden('id');
				echo $this->BootstrapForm->input('Group');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries')), array('controller' => 'entries', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Entry')), array('controller' => 'entries', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('controller' => 'profiles', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups')), array('controller' => 'groups', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('controller' => 'groups', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>