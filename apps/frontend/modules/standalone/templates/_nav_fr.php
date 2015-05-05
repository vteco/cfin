<?php 
$forkIds = array('fork_quisommesnous', 'fork_credit', 'fork_gestion', 'fork_financement');

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
    

    <li <?php $rootId == 'fork_news' and print 'class="current"' ?>>
      <a href="<?php echo url_for('news-list') ?>">Actualité</a>
    </li>
    <li <?php $rootId == 'fork_contact' and print 'class="current"' ?>>
      <a class="contactLink" href="<?php echo url_for('@contact') ?>">Nous contacter</a>
    </li>
  </ul>
</nav>
