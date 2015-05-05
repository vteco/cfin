<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php if($sf_user->isAuthenticated()): ?>
    <div id="menu">
      <ul>
        <li><?php echo link_to('Pages indépendantes', 'standalone') ?></li>
        <li><?php echo link_to('Actualités', 'news') ?></li>
        <li><?php echo link_to('Catégories', 'category') ?></li>
        <li><?php echo link_to('Faq', 'faq') ?></li>
      </ul>
      <?php if($sf_user->hasCredential('backend-guard')): ?>
      <ul>
        <li><?php echo link_to('Gestion des utilisateurs', 'sf_guard_user') ?></li>
        <li><?php echo link_to('Gestion des groupes', 'sf_guard_group') ?></li>
        <li><?php echo link_to('Gestion des permissions', 'sf_guard_permission') ?></li>
      </ul>
      <?php endif ?>
    </div>
    </div>
    <a id="logout" href="<?php echo url_for('sf_guard_signout') ?>" style="float: right; font-weight: bold; color:red; margin-right: 30px;">Déconnexion</a>
    <?php endif ?>
    <?php echo $sf_content ?>
  </body>
</html>
