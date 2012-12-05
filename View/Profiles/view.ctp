<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Profile');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Location'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['location']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Biography'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['biography']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Url'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['url']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Profile')), array('action' => 'edit', $profile['Profile']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Profile')), array('action' => 'delete', $profile['Profile']['id']), null, __('Are you sure you want to delete # %s?', $profile['Profile']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Profiles')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Profile')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

