<?php 
// Si on n'est pas sur la home, le h1 doit être présent en haut de page, et doit être un bandeau customisé pour chaque catégorie, 
// donc pour chaque 'root_id'
if(!$isHome): 
  slot('top_banner');
?>
<section class="topBanner <?php echo get_slot('root_id') ?>">
  <h1 class="container_24">
    <?php echo $page->getH1() ?>
  </h1>
</section>
<?php 
 end_slot();
 endif;
?>

<div class="wrapper">
  <?php if($isHome): ?>
  <?php echo $page->getContent(ESC_RAW) ?>
  
  <?php else: ?>
  <article class="grid_7">
  <?php include_partial('leftCol', array('page' => $page->getParent(), 'current' => $page)) ?>
  </article>

  <article class="grid_17">
  <?php echo $page->getContent(ESC_RAW) ?>
  </article>
  <?php endif ?>
</div>