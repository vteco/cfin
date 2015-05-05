<div class="container_24">

  <div class="wrapper">
    <?php include_partial('leftCol') ?>
    
    <article class="grid_17 elemList">
      <h1>
        <?php echo __('FAQ') ?>
      </h1>
      
      <br />
      
      <?php foreach($faqs as $faq): ?>
      <h2><?php echo link_to($faq->getTitle(), url_for('faq-show', $faq)) ?></h2>
      <?php endforeach ?>
    </article>

  </div>
  
</div>
