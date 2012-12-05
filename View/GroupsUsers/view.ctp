<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Groups User');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($groupsUser['GroupsUser']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($groupsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $groupsUser['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Group'); ?></dt>
			<dd>
				<?php echo $this->Html->link($groupsUser['Group']['id'], array('controller' => 'groups', 'action' => 'view', $groupsUser['Group']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($groupsUser['GroupsUser']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($groupsUser['GroupsUser']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Groups User')), array('action' => 'edit', $groupsUser['GroupsUser']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Groups User')), array('action' => 'delete', $groupsUser['GroupsUser']['id']), null, __('Are you sure you want to delete # %s?', $groupsUser['GroupsUser']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups Users')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Groups User')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups')), array('controller' => 'groups', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

