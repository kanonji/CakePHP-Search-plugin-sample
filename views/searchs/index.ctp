<?php if(! empty($entries)): ?>
<div class="entries index">
  <h1>検索結果</h1>
  <div class="paging">
  <?php
  echo $this->Paginator->counter(array(
  'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
  ));
  ?>
    <?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
   |    <?php echo $this->Paginator->numbers();?>
 |
    <?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
  </div>
<?php foreach ($entries as $entry): ?>
  <div class="item">
  <dl>
    <dt>Entry id</dt><dd><?php echo $entry['Entry']['id'];?></dd>
    <dt>Entry label</dt><dd><?php echo $entry['Entry']['label'];?></dd>
    <dt>Entry pageview</dt><dd><?php echo $entry['Entry']['pageview'];?></dd>
    <dt>Tag</dt><dd><?php foreach($entry['Tag'] as $tag){echo $tag['label'];}?></dd>
    <dt>User id</dt><dd><?php echo $entry['User']['id'];?></dd>
    <dt>User username</dt><dd><?php echo $entry['User']['username'];?></dd>
    <dt>User email</dt><dd><?php echo $entry['User']['email'];?></dd>
    <dt>Profile location</dt><dd><?php echo $entry['User']['Profile']['location'];?></dd>
    <dt>Groupp</dt><dd><?php foreach($entry['User']['Groupp'] as $groupp){echo $groupp['label'];}?></dd>
  </dl>
  </div><!-- class="item" -->
  <hr />
<?php endforeach;?>
</div><!-- class="entries index" -->
<?php endif;?>
<div class="entries form">
<?php echo $this->Form->create();?>
	<fieldset>
 		<legend><?php __('Seach Entry'); ?></legend>
	<?php
		//echo $form->input('location',array('type'=>'radio','options'=>$locations,'label'=>'Profile.location'));
		echo $form->input('label',array('label'=>'Entry.label'));
		echo $form->input('email',array('label'=>'User.email'));
		echo $form->input('pageview',array('multiple'=>'checkbox','options'=>$pageviews,'label'=>'Entry.pageview'));
		echo $form->input('groupp_id',array('multiple'=>'checkbox','options'=>$groups,'label'=>'Groupp HABTM User'));
		echo $form->input('tag_id',array('multiple'=>'checkbox','options'=>$tags,'label'=>'Tag HABTM Entry'));
		echo $form->input('word');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Search', true));?>
</div>