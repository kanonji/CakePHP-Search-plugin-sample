<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Tag', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Tag')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('label', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('Entry');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Tags')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries')), array('controller' => 'entries', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Entry')), array('controller' => 'entries', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>