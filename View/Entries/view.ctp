<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Entry');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($entry['Entry']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($entry['User']['id'], array('controller' => 'users', 'action' => 'view', $entry['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Label'); ?></dt>
			<dd>
				<?php echo h($entry['Entry']['label']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Body'); ?></dt>
			<dd>
				<?php echo h($entry['Entry']['body']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Pageview'); ?></dt>
			<dd>
				<?php echo h($entry['Entry']['pageview']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Is Running'); ?></dt>
			<dd>
				<?php echo h($entry['Entry']['is_running']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($entry['Entry']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($entry['Entry']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Entry')), array('action' => 'edit', $entry['Entry']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Entry')), array('action' => 'delete', $entry['Entry']['id']), null, __('Are you sure you want to delete # %s?', $entry['Entry']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Entry')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tags')), array('controller' => 'tags', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Tag')), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Tags')); ?></h3>
	<?php if (!empty($entry['Tag'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Label'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($entry['Tag'] as $tag): ?>
			<tr>
				<td><?php echo $tag['id'];?></td>
				<td><?php echo $tag['label'];?></td>
				<td><?php echo $tag['created'];?></td>
				<td><?php echo $tag['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $tag['id']), null, __('Are you sure you want to delete # %s?', $tag['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Tag')), array('controller' => 'tags', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
