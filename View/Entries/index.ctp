<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Entries'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('user_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('label');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('body');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('pageview');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('is_running');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($entries as $entry): ?>
			<tr>
				<td><?php echo h($entry['Entry']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($entry['User']['id'], array('controller' => 'users', 'action' => 'view', $entry['User']['id'])); ?>
				</td>
				<td><?php echo h($entry['Entry']['label']); ?>&nbsp;</td>
				<td><?php echo h($entry['Entry']['body']); ?>&nbsp;</td>
				<td><?php echo h($entry['Entry']['pageview']); ?>&nbsp;</td>
				<td><?php echo h($entry['Entry']['is_running']); ?>&nbsp;</td>
				<td><?php echo h($entry['Entry']['created']); ?>&nbsp;</td>
				<td><?php echo h($entry['Entry']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $entry['Entry']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entry['Entry']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entry['Entry']['id']), null, __('Are you sure you want to delete # %s?', $entry['Entry']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Entry')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tags')), array('controller' => 'tags', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Tag')), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>