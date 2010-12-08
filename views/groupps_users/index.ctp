<div class="grouppsUsers index">
	<h2><?php __('Groupps Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('groupp_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($grouppsUsers as $grouppsUser):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $grouppsUser['GrouppsUser']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grouppsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $grouppsUser['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($grouppsUser['Groupp']['id'], array('controller' => 'groupps', 'action' => 'view', $grouppsUser['Groupp']['id'])); ?>
		</td>
		<td><?php echo $grouppsUser['GrouppsUser']['created']; ?>&nbsp;</td>
		<td><?php echo $grouppsUser['GrouppsUser']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $grouppsUser['GrouppsUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $grouppsUser['GrouppsUser']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $grouppsUser['GrouppsUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $grouppsUser['GrouppsUser']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Groupps User', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groupps', true), array('controller' => 'groupps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupp', true), array('controller' => 'groupps', 'action' => 'add')); ?> </li>
	</ul>
</div>