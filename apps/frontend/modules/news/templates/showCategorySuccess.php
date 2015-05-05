<div class="container_24">
  <div class="wrapper">
    <?php include_partial('leftCol', array('activeCat' => $category)) ?>
    
    <article class="grid_17">
      <h1><?php echo $category->getName() ?></h1>
      <br />
      <?php if(count($newss) > 0): ?>
      <?php include_partial('newsList', array('newss' => $newss)) ?>
      <?php else:?>
      <a href="<?php echo url_for('news-list') ?>"> Aucune news dans cette catégories </a>
      <?php endif ?>
    </article>
  </div>
</div>