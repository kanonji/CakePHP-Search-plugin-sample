<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Tag');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($tag['Tag']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Label'); ?></dt>
			<dd>
				<?php echo h($tag['Tag']['label']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($tag['Tag']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($tag['Tag']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Tag')), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Tag')), array('action' => 'delete', $tag['Tag']['id']), null, __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tags')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Tag')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries')), array('controller' => 'entries', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Entry')), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Entries')); ?></h3>
	<?php if (!empty($tag['Entry'])):?>
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
		<?php foreach ($tag['Entry'] as $entry): ?>
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
