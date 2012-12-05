<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Entries Tag');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($entriesTag['EntriesTag']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Entry'); ?></dt>
			<dd>
				<?php echo $this->Html->link($entriesTag['Entry']['id'], array('controller' => 'entries', 'action' => 'view', $entriesTag['Entry']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Tag'); ?></dt>
			<dd>
				<?php echo $this->Html->link($entriesTag['Tag']['id'], array('controller' => 'tags', 'action' => 'view', $entriesTag['Tag']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($entriesTag['EntriesTag']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($entriesTag['EntriesTag']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Entries Tag')), array('action' => 'edit', $entriesTag['EntriesTag']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Entries Tag')), array('action' => 'delete', $entriesTag['EntriesTag']['id']), null, __('Are you sure you want to delete # %s?', $entriesTag['EntriesTag']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries Tags')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Entries Tag')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Entries')), array('controller' => 'entries', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Entry')), array('controller' => 'entries', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tags')), array('controller' => 'tags', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Tag')), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

