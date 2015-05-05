<?php 
// L'actualité en cours, s'il y en a une
if(!isset($activeCat))
  $activeCat = null; 
?>

<article class="grid_7">
  <?php include_component('news','categoryList', array('activeCat' => $activeCat));?>
  <a id="leftContactBtn" class="orangeButton" href="<?php echo url_for('@contact') ?>"><span><?php echo __('Nous contacter') ?></span></a>
  
  <?php include_component('faq', 'latestLeft') ?>
</article>