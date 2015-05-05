<div class="container_24">

  <div class="wrapper">
    <?php include_partial('leftCol', array('activeCat' => $news->getCategory())) ?>
    
    <article class="grid_17">
      <div class="newsDate">
        créée le <?php echo $news->getDatetimeObject('created_at')->format('d / m / Y') ?>
      </div>
      <h1 class="clearedBox"><?php echo $news->getTitle() ?></h1>

      <img id="imgNews" src="<?php $news->hasImage() and print $news->getImagePath() ?>" alt=""/>
      
      <?php echo $news->getContent(ESC_RAW) ?>      
    </article>

  </div>
  
</div>
