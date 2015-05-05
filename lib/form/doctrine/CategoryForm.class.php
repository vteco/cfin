<?php

/**
 * Category form.
 *
 * @package    cartefinancement
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CategoryForm extends BaseCategoryForm
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
    
    // Pour des raisons inconnues, le slug n'est pas required par défaut
    $this->validatorSchema['slug']->setOption('required', true);
    $this->validatorSchema['slug']->setMessage('required', "Le champ slug est requis. C'est cette valeur qui sera utilisée pour générer l'URL");
    
    $this->removeFields();
  }
  protected function removeFields()
  {
    unset(
      $this['created_at'], $this['updated_at']
    );
  }
}
