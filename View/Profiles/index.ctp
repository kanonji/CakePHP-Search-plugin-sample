<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Profiles'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('user_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('location');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('biography');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('url');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($profiles as $profile): ?>
			<tr>
				<td><?php echo h($profile['Profile']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
				</td>
				<td><?php echo h($profile['Profile']['location']); ?>&nbsp;</td>
				<td><?php echo h($profile['Profile']['biography']); ?>&nbsp;</td>
				<td><?php echo h($profile['Profile']['url']); ?>&nbsp;</td>
				<td><?php echo h($profile['Profile']['created']); ?>&nbsp;</td>
				<td><?php echo h($profile['Profile']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $profile['Profile']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profile['Profile']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profile['Profile']['id']), null, __('Are you sure you want to delete # %s?', $profile['Profile']['id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>