<div class="faqResume">
  <h3>FAQ</h3>

  <div class="wrapper">
    <article class="grid_6 alpha">
      <ul class="list-2">
        <?php foreach($faqs as $faq): ?>
        <li><?php echo link_to($faq->getTitle(), url_for('faq-show', $faq)) ?></li>
        <?php endforeach ?>
      </ul>
    </article>
  </div>
</div>