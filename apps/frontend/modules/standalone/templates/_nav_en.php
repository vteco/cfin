<?php 
$forkIds = array('fork_aboutus', 'fork_frenchmortgage_services', 'fork_frenchmortgage_products');

// la racine de la page en cours s'appelle root_id
$rootId = get_slot('root_id');
?>

<nav>
  <ul class="sf-menu sf-js-enabled">
    <?php foreach($forkIds as $forkId):
    $fork = StandAloneTable::getInstance()->findOneByPageId($forkId); ?>
    <li <?php $rootId == $forkId and print 'class="current"' ?>>
      <?php echo standalone_link($forkId) ?>
      <?php if($fork->hasChildren()): ?>
      <ul>
        <?php foreach($fork->getChildren() as $child): ?>
        <li><?php echo standalone_link($child) ?></li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>
    </li>
    <?php endforeach ?>
    
    <li <?php $rootId == 'fork_simulation' and print 'class="current"' ?>>
      <?php echo standalone_link('page_simulation') ?>
    </li>
    <li <?php $rootId == 'fork_faq' and print 'class="current"' ?>>
      <?php echo link_to("News", url_for('news-list')) ?>
    </li>
    <li <?php $rootId == 'fork_contact' and print 'class="current"' ?>>
      <a class="contactLink" href="<?php echo url_for('@contact') ?>">Contact us</a>
    </li>
  </ul>
</nav>
