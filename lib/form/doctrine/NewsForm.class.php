<?php

/**
 * News form.
 *
 * @package    cartefinancement
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsForm extends BaseNewsForm
{
  public function configure()
  {
    $languages = array(
      'fr' => 'français',
      'en' => 'anglais',
    );
    $this->widgetSchema['lang'] = new sfWidgetFormChoice(array(
      'choices' => $languages,
    ));
    $this->validatorSchema['lang'] = new sfValidatorChoice(array(
      'choices' => array_keys($languages),
      'required' => true,
    ));
    
    $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
      'label' => "Image de l'actu",
      'file_src'=> $this->getObject()->getImagePath(), 
      'is_image' => true,
      'with_delete' => true,
      'template'  => '<div class="upload_file_img">%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));

    $this->validatorSchema['image'] = new sfValidatorFile(array(
    	'required' => false,
    	'path' => sfConfig::get('sf_upload_dir').'/news',
      'mime_types' => 'web_images'
    ));
    
    $this->widgetSchema['created_at'] = new sfWidgetFormDate(array(
      'format' => '%day%/%month%/%year%',
    ));
    
    $this->widgetSchema['flag']->setLabel("Mettre en avant");
    
    unset(
      $this->widgetSchema['version'],
      $this->widgetSchema['updated_at'],
      
      $this->validatorSchema['version'],
      $this->validatorSchema['updated_at']
    );
  }
}
