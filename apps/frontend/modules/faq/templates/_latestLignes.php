<?php 
foreach($faqs as $faq):
  if($faq == $currentFaq)
    continue;
?>
<h3><?php echo link_to($faq->getTitle(), url_for('faq-show', $faq)) ?></h3>
<?php endforeach ?>
