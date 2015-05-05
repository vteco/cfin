<?php // On un-escape le témoignage
// $testimony = $sf_data->getRaw('testimony') ?>

<h3><?php echo $sf_user->getCulture() == 'fr' ? "Témoignages" : "Testimonials" ?></h3>
<blockquote class="quotes">
  "<?php echo $testimony->getRaw('content') ?>"
    <div class="blockquote"></div>
</blockquote>

<span><?php echo $testimony['author'] ?></span><br>
<?php 
  /* Le champ 'job' est mal rempli. 
  Donc pour l'instant, on ne l'affiche pas */
  /**** echo $testimony['job'] ****/
?>