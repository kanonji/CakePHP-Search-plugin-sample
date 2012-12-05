<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Entries Tags'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('entry_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('tag_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($entriesTags as $entriesTag): ?>
			<tr>
				<td><?php echo h($entriesTag['EntriesTag']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($entriesTag['Entry']['id'], array('controller' => 'entries', 'action' => 'view', $entriesTag['Entry']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($entriesTag['Tag']['id'], array('controller' => 'tags', 'action' => 'view', $entriesTag['Tag']['id'])); ?>
				</td>
				<td><?php echo h($entriesTag['EntriesTag']['created']); ?>&nbsp;</td>
				<td><?php echo h($entriesTag['EntriesTag']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $entriesTag['EntriesTag']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entriesTag['EntriesTag']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entriesTag['EntriesTag']['id']), null, __('Are you sure you want to delete # %s?', $entriesTag['EntriesTag']['id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Entries Tag')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries')), array('controller' => 'entries', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Entry')), array('controller' => 'entries', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tags')), array('controller' => 'tags', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Tag')), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>