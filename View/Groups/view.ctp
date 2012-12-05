<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Group');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($group['Group']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Label'); ?></dt>
			<dd>
				<?php echo h($group['Group']['label']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($group['Group']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($group['Group']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Group')), array('action' => 'edit', $group['Group']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Group')), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Users')); ?></h3>
	<?php if (!empty($group['User'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Username'); ?></th>
				<th><?php echo __('Email'); ?></th>
				<th><?php echo __('Label'); ?></th>
				<th><?php echo __('Password'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($group['User'] as $user): ?>
			<tr>
				<td><?php echo $user['id'];?></td>
				<td><?php echo $user['username'];?></td>
				<td><?php echo $user['email'];?></td>
				<td><?php echo $user['label'];?></td>
				<td><?php echo $user['password'];?></td>
				<td><?php echo $user['created'];?></td>
				<td><?php echo $user['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
