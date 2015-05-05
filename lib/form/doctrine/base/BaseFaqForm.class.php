<?php

/**
 * Faq form base class.
 *
 * @method Faq getObject() Returns the current form's model object
 *
 * @package    cartefinancement
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFaqForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'content'      => new sfWidgetFormTextarea(),
      'lang'         => new sfWidgetFormInputText(),
      'meta_title'   => new sfWidgetFormInputText(),
      'meta_desc'    => new sfWidgetFormInputText(),
      'meta_keywrds' => new sfWidgetFormInputText(),
      'published'    => new sfWidgetFormInputCheckbox(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'version'      => new sfWidgetFormInputText(),
      'slug'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 255)),
      'content'      => new sfValidatorString(array('max_length' => 65535, 'required' => false)),
      'lang'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_title'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_desc'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_keywrds' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'published'    => new sfValidatorBoolean(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'version'      => new sfValidatorInteger(array('required' => false)),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Faq', 'column' => array('slug', 'lang')))
    );

    $this->widgetSchema->setNameFormat('faq[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Faq';
  }

}
