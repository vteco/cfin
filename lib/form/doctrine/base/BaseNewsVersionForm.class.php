<?php

/**
 * NewsVersion form base class.
 *
 * @method NewsVersion getObject() Returns the current form's model object
 *
 * @package    cartefinancement
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNewsVersionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'category_id'  => new sfWidgetFormInputText(),
      'lang'         => new sfWidgetFormInputText(),
      'title'        => new sfWidgetFormInputText(),
      'content'      => new sfWidgetFormTextarea(),
      'summary'      => new sfWidgetFormTextarea(),
      'meta_title'   => new sfWidgetFormInputText(),
      'meta_desc'    => new sfWidgetFormInputText(),
      'meta_keywrds' => new sfWidgetFormInputText(),
      'published'    => new sfWidgetFormInputCheckbox(),
      'image'        => new sfWidgetFormInputText(),
      'flag'         => new sfWidgetFormInputCheckbox(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'version'      => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'category_id'  => new sfValidatorInteger(array('required' => false)),
      'lang'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 255)),
      'content'      => new sfValidatorString(array('max_length' => 65535, 'required' => false)),
      'summary'      => new sfValidatorString(array('max_length' => 65535, 'required' => false)),
      'meta_title'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_desc'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_keywrds' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'published'    => new sfValidatorBoolean(array('required' => false)),
      'image'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'flag'         => new sfValidatorBoolean(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'version'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('version')), 'empty_value' => $this->getObject()->get('version'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('news_version[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NewsVersion';
  }

}
