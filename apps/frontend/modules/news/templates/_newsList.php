<?php if(count($newss) == 0): ?>
<h2><?php echo __('NoNewsForNow') ?></h2>
<?php else: ?>
  
  <?php 
  $i = 0;
  foreach($newss as $news): ?>
  <?php ++$i; 
  $urlParams = array('slug' => $news->getSlug(), 'category_slug' => $news->getCategory()->getSlug());
  $newsUrl = url_for('news-show', $urlParams);
  $date = $news->getDatetimeObject('created_at')->format("d / m / Y");
  $imgClass = 'miniThumbnail';
  switch($i) {
    case 1 : echo '<div id="breakingNews">'; $imgClass = 'thumbnail'; break;
    case 2 : echo '</div><hr/><div id="secondaryNews" class="clearedBox"><article id="secondNews">'; $imgClass = 'thumbnail'; break;
    case 3 : echo '</article><article id="thirdNews">'; $imgClass = 'thumbnail'; break;
    case 4 : echo '</article></div><h2> Actualités plus anciennes</h2><div id="oldNews">'; break;
    default : echo '</div><div id="oldNews">';
  }
  $image = $news->getImage(); 
  if($i > 1 & $i < 4){ 
    if($image <> "") {?>
      <a href="<?php echo $newsUrl ?>"><img id="<?php echo $imgClass; ?>" src="<?php $image <> '' and print '/uploads/news/'.$image;?>" alt=""/></a>
      <?php 
    } ?>
    <h2><?php echo link_to($news->getTitle(), $newsUrl ); ?></h2>
<?php }
  else if($i == 1){ ?>
    <h2 class="mainNews"><?php echo link_to($news->getTitle(), $newsUrl); ?></h2>
    <a href="<?php echo $newsUrl ?>"><img id="<?php echo $imgClass; ?>" src="<?php $image <> '' and print '/uploads/news/'.$image;?>" alt=""/></a>
  <?php }
  else{
    if($image <> "") {?>
      <a href="<?php echo $newsUrl ?>"><img id="<?php echo $imgClass; ?>" src="<?php $image <> '' and print '/uploads/news/'.$image;?>" alt=""/></a>
      <?php 
    }?>
    <h3><?php echo link_to($news->getTitle(), $newsUrl); ?></h3>
    <?php        
  }
  if($i < 4){ ?>
    <p class="p3">
      <?php echo CarteFinancement::makeSummary($news->getSummary(ESC_RAW), 400); ?>
      <span class="newsDate">créée le <?php echo $date ?></span>
    </p>
  <?php } ?>
  <?php endforeach ?>
  <?php echo '</div>'; ?>

<?php endif ?>