<?php 
$contactEmail = sfConfig::get('app_contact_email_' . $sf_user->getCulture());
?>

<div class="wrapper">
  <article class="grid_7">
      <h2><?php echo __('SendUsMsg') ?></h2>
      <div id="contact_form">
        
        <?php if(isset($success) && !$success): ?>
        <span class="error"><?php echo __('SendError') ?></span>
        <?php endif ?>
          
          <form id="contact-form" name="contact-form" action="<?php echo url_for('@contact') ?>" method="post">
           <fieldset>
             <label class="name">
                <input type="text" value="<?php echo __('LabelName') ?>:">
                 <span class="error">*<?php echo __('InvalidName') ?></span> <span class="empty">*<?php echo __('RequiredField') ?></span>
             </label>
             <label class="email">
                <input type="text" value="<?php echo __('LabelEmail') ?>:">
                 <span class="error">*<?php echo __('InvalidEmail') ?></span> <span class="empty">*<?php echo __('RequiredField') ?></span>
             </label>
             <label class="phone">
                <input type="text" value="<?php echo __('LabelTel') ?>:">
                 <span class="error">*<?php echo __('InvalidTel') ?>.</span> <span class="empty">*<?php echo __('RequiredField') ?></span>
             </label>
             <label class="message">
                <textarea><?php echo __('LabelComment') ?>:</textarea>
                <span class="error">*<?php echo __('InvalidComment') ?></span> <span class="empty">*<?php echo __('RequiredField') ?></span>
             </label>
             <div class="success"><?php echo __('SuccessMsg1') ?><br>
                 <strong><?php echo __('SuccessMsg2') ?></strong>
             </div>
             <div class="buttons2">
                 <a href="#" data-type="reset" class="button"><?php echo __('ContactReset') ?></a>
                 <a href="#" data-type="submit" class="button"><?php echo __('ContactSend') ?></a>
             </div>
           </fieldset>
           </form>
      </div>
  </article>
  <article class="grid_17">
    <h2><?php echo __('CarteFin') ?></h2>
    <iframe id="map_canvas" width="448" height="272" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=58+Rue+d'Hauteville,+75010+Paris,+France&amp;aq=&amp;sll=48.871673,2.350685&amp;sspn=0.011573,0.01929&amp;ie=UTF8&amp;hq=&amp;hnear=58+Rue+d'Hauteville,+75010+Paris,+%C3%8Ele-de-France,+France&amp;t=m&amp;ll=48.880288,2.351847&amp;spn=0.015352,0.038366&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
    <div class="extra-wrap">
        <b class="color-3">Paris</b>
        <br />
        <dl class="address">
          <dt>11 rue Jean Mermoz<br>75008 Paris</dt>
            <dd><span>Telephone:</span>+33 1 53 24 14 40</dd>
            <dd><span>FAX:</span>+33 1 53 24 14 41</dd>
            <dd><a href="mailto:<?php echo $contactEmail ?>"><?php echo $contactEmail ?></a></dd>
        </dl>
    </div>
  </article>
  

  
  <article class="grid_17">
    <br />
    <iframe id="map_canvas" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=1572,+Boulevard+Edouard+VII+06310+Beaulieu-Sur-Mer&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=54.928982,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=1572+Boulevard+%C3%89douard+VII,+06310+Beaulieu-sur-Mer,+Alpes-Maritimes,+Provence-Alpes-C%C3%B4te+d'Azur,+France&amp;ll=43.71836,7.330278&amp;spn=0.012393,0.01929&amp;t=m&amp;z=14&amp;output=embed"></iframe>
    <div class="extra-wrap">
        <b class="color-3">Côte d'Azur</b>
        <br />
        <dl class="address">
          <dt>1572, Boulevard Edouard VII<br>06310 Beaulieu-Sur-Mer</dt>
            <dd><span>Telephone:</span>+33 6 64 32 94 32</dd>
            <dd><a href="mailto:<?php echo $contactEmail ?>"><?php echo $contactEmail ?></a></dd>
        </dl>
    </div>
  </article>
</div>

