<div class="grouppsUsers view">
<h2><?php  __('Groupps User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grouppsUser['GrouppsUser']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($grouppsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $grouppsUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Groupp'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($grouppsUser['Groupp']['id'], array('controller' => 'groupps', 'action' => 'view', $grouppsUser['Groupp']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grouppsUser['GrouppsUser']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grouppsUser['GrouppsUser']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Groupps User', true), array('action' => 'edit', $grouppsUser['GrouppsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Groupps User', true), array('action' => 'delete', $grouppsUser['GrouppsUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $grouppsUser['GrouppsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groupps Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupps User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groupps', true), array('controller' => 'groupps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupp', true), array('controller' => 'groupps', 'action' => 'add')); ?> </li>
	</ul>
</div>
