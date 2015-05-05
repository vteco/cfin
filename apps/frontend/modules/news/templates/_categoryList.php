<ul class="list-1">
  <li><i><a href="<?php echo url_for('news-list') ?>" <?php !$activeCat and print 'class="current"' ?>>
        <?php echo __('AllNews') ?>
  </a></i></li>
  <?php foreach ($categories as $category): ?>
  <li><a <?php $activeCat == $category and print 'class="current"' ?> href="<?php echo url_for('category-show', array('slug' => $category->getSlug())) ?>"><?php echo $category->getName(); ?></a></li>
  <?php endforeach; ?>
</ul>
