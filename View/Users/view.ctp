<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('User');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($user['User']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Username'); ?></dt>
			<dd>
				<?php echo h($user['User']['username']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Email'); ?></dt>
			<dd>
				<?php echo h($user['User']['email']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Label'); ?></dt>
			<dd>
				<?php echo h($user['User']['label']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Password'); ?></dt>
			<dd>
				<?php echo h($user['User']['password']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($user['User']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($user['User']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('User')), array('action' => 'edit', $user['User']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('User')), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries')), array('controller' => 'entries', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Entry')), array('controller' => 'entries', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups')), array('controller' => 'groups', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Entries')); ?></h3>
	<?php if (!empty($user['Entry'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Label'); ?></th>
				<th><?php echo __('Body'); ?></th>
				<th><?php echo __('Pageview'); ?></th>
				<th><?php echo __('Is Running'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($user['Entry'] as $entry): ?>
			<tr>
				<td><?php echo $entry['id'];?></td>
				<td><?php echo $entry['user_id'];?></td>
				<td><?php echo $entry['label'];?></td>
				<td><?php echo $entry['body'];?></td>
				<td><?php echo $entry['pageview'];?></td>
				<td><?php echo $entry['is_running'];?></td>
				<td><?php echo $entry['created'];?></td>
				<td><?php echo $entry['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'entries', 'action' => 'view', $entry['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'entries', 'action' => 'edit', $entry['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'entries', 'action' => 'delete', $entry['id']), null, __('Are you sure you want to delete # %s?', $entry['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Entry')), array('controller' => 'entries', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Profiles')); ?></h3>
	<?php if (!empty($user['Profile'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Location'); ?></th>
				<th><?php echo __('Biography'); ?></th>
				<th><?php echo __('Url'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($user['Profile'] as $profile): ?>
			<tr>
				<td><?php echo $profile['id'];?></td>
				<td><?php echo $profile['user_id'];?></td>
				<td><?php echo $profile['location'];?></td>
				<td><?php echo $profile['biography'];?></td>
				<td><?php echo $profile['url'];?></td>
				<td><?php echo $profile['created'];?></td>
				<td><?php echo $profile['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'profiles', 'action' => 'view', $profile['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'profiles', 'action' => 'edit', $profile['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'profiles', 'action' => 'delete', $profile['id']), null, __('Are you sure you want to delete # %s?', $profile['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('controller' => 'profiles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Groups')); ?></h3>
	<?php if (!empty($user['Group'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Label'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($user['Group'] as $group): ?>
			<tr>
				<td><?php echo $group['id'];?></td>
				<td><?php echo $group['label'];?></td>
				<td><?php echo $group['created'];?></td>
				<td><?php echo $group['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'groups', 'action' => 'view', $group['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'groups', 'action' => 'edit', $group['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'groups', 'action' => 'delete', $group['id']), null, __('Are you sure you want to delete # %s?', $group['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('controller' => 'groups', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
