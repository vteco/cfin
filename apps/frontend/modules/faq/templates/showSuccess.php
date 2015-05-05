<div class="container_24">

  <div class="wrapper">
    <?php include_partial('leftCol') ?>
    
    <article class="grid_17">
      <h1><?php echo $faq->getTitle() ?></h1>
      
      <?php echo $faq->getContent(ESC_RAW) ?>
      
      <hr style="border: 0; border-top: 1px solid #AAA; height:1px; margin: 20px 0;" />
      <?php include_component('faq', 'latestLignes', array('currentFaq' => $faq, 'max' => 10)) ?>
    </article>
    
    
    <p style="text-align:right;"><?php echo link_to(__("Toutes les FAQ"), url_for('faq-list')) ?></p>
    
    

  </div>
  
</div>
