<!DOCTYPE html>
<html lang="<?php echo $sf_user->getCulture() ?>">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    
    <!--[if lt IE 8]>
    <?php if($sf_user->getCulture() == 'fr'): ?>
    <div class='aligncenter'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0024_french.jpg"border="0"></a></div>  
    <?php else: ?>
    <div class='aligncenter'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg"border="0"></a></div>  
    <?php endif ?>
    <![endif]-->
    
    
    <!--[if lt IE 9]>
      <script src="/js/html5.js"></script>
      <link rel="stylesheet" href="/css/ie.css"> 
    <![endif]-->
    
    <?php if(sfConfig::get('sf_environment') == 'prod'): ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      <?php if($sf_user->getCulture() == 'fr'): ?>
      ga('create', 'UA-39691454-1', 'cartefinancement.com');
      <?php else: ?>
      ga('create', 'UA-39691454-2', 'french-mortgage-expert.com');
      <?php endif ?>
      ga('send', 'pageview');

    </script>
    <?php endif ?>
    
  </head>
  <?php $isHome = get_slot('is_home', false); ?>
  <body <?php has_slot('page_id') and print sprintf('id="%s"', get_slot('page_id')) ?>>
    
    <!--==============================header=================================-->
    <header>
      <div class="main">
        <div class="topHeader">
          <?php if($sf_user->getCulture() == 'fr'): ?>
          <a href="<?php echo url_for('homepage') ?>" class="logo">Carte financement</a>
          <?php elseif($sf_user->getCulture() == 'en'): ?>
          <a href="<?php echo url_for('homepage') ?>" class="logo logo-en">French Mortgage Expert</a>
          <?php endif ?>
          
          <div id="languageSwitcher">
          <?php 
          if($sf_user->getCulture() == "fr") {
            $imgName = 'en-flag-logo.png';
            $alt = "English";
            $culture = "en";
          } else if($sf_user->getCulture() == "en") {
            $imgName = 'fr-flag-logo.png';
            $alt = "Français";
            $culture = "fr";
          } ?>
            <a href="<?php echo sfConfig::get('app_' . $culture . '_home') ?>">
              <img src="/images/flags/<?php echo $imgName ?>" class="flag" alt="<?php echo $alt ?>" />
            </a>
          </div>
          
          <div class="rappelle">
          <img alt="" src="/images/telephone.png" />
          +33.1.53.24.14.40
          </div>
          
          <div class="clear"></div>
        </div>
        <?php // Le menu dépend de la langue en cours
        include_partial('standalone/nav_' . $sf_user->getCulture()) ?>
        <div class="clear"></div>
      </div>
      
      <?php $isHome and include_partial('standalone/slider') ?>
    </header>
    
    <?php // Pour avoir un bandeau de titre, fixé dans le module 'standalone'
    has_slot('top_banner') and include_slot('top_banner') ?>
    
    <section id="content">
      <div class="container_24">
        <?php echo $sf_content ?>
      </div>
    </section>
    
    
    <?php // On inclut la calculette, et on la positionne en javascript au bon endroit
    include_partial('standalone/calculator') ?>
    <script type="text/javascript">
    $(function() {
      // L'appel à 'remove' va supprimer automatiquement l'iframe, pour les pages qui n'en ont pas besoin
      var calculette = $('#calculetteIframe').remove();
      $('#calculatorContainer').append(calculette);
    });
    </script>
    
    <?php $isHome and include_partial('standalone/carousel') ?>
    
    <?php include_partial('standalone/footer_' . $sf_user->getCulture()) ?>
    
    <?php // Boutons sociaux
    include_partial('standalone/sharethis') ?>
    
    <?php // Script de retargeting google
    if(get_partial('standalone/remarketing_' . $sf_user->getCulture())):
      include_partial('standalone/remarketing_' . $sf_user->getCulture());
    endif;
    ?>
  </body>
</html>
