<!-- slider -->
<?php
$srcBanners = array(
  'fr' => array(
    1 => 'courtier_immobilier.jpg', 
    2 => 'vignes.jpg',
    3 => 'manhattan.jpg', 
    4 => 'equity_release.jpg',
  ), 
  'en' => array(
    1 => 'residential_mortgage.jpg', 
    2 => 'buy_to_let.jpg',
    3 => 'equity_release.jpg', 
    4 => 'remortgage.jpg',
  ),
);
$bannerImgs = $srcBanners[$sf_user->getCulture()];
?>

<div id="slider">
  <div class="slider_1">
    <div class="slider">
      <ul class="items">
        <?php foreach($bannerImgs as $index => $imgName): ?>
        <li>
          <img src="/images/homebanner/<?php echo $imgName ?>" alt="" />
          <div class="banner">
            <strong><?php echo __(sprintf('Slider%d.1', $index)) ?></strong>
            <br />
            <strong><?php echo __(sprintf('Slider%d.2', $index)) ?></strong>
          </div>
        </li>
        <?php endforeach ?>
      </ul>
    </div> 
  </div>
  <div class="main rel">
    <a id="homeContactBtn" class="orangeButton" href="<?php echo url_for('@contact') ?>"><span><?php echo __('Nous contacter') ?></span></a>            
    <ul class="pagination"></ul>
  </div>
</div>
<!-- slider-end -->