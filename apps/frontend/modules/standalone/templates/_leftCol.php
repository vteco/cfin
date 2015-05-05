<?php if($page->hasChildren()): ?>
<ul class="list-1">
  <?php foreach($page->getChildren() as $child):
    $linkAttributes = $child->getId() == $current->getId() ? array('class' => "current") : array(); ?>
  <li><?php echo standalone_link($child, $linkAttributes) ?></li>
  <?php endforeach ?>
</ul>
<?php endif ?>

<a <?php !$page->hasChildren() and print 'style="margin-top:0;"' ?> id="leftContactBtn" class="orangeButton" href="<?php echo url_for('@contact') ?>"><span><?php echo __('Nous contacter') ?></span></a>

<?php include_component('standalone', 'testimony') ?>

<h3 style="margin-top:20px;"><?php echo link_to(__("Toutes les FAQ"), url_for('faq-list')) ?></h3>

  