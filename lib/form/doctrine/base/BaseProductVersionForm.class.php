<?php

/**
 * ProductVersion form base class.
 *
 * @method ProductVersion getObject() Returns the current form's model object
 *
 * @package    cartefinancement
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductVersionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'title'       => new sfWidgetFormInputText(),
      'sub_title'   => new sfWidgetFormInputText(),
      'summary'     => new sfWidgetFormTextarea(),
      'image_name'  => new sfWidgetFormInputText(),
      'category_id' => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'version'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 255)),
      'sub_title'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'summary'     => new sfValidatorString(array('max_length' => 65535, 'required' => false)),
      'image_name'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'category_id' => new sfValidatorInteger(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'version'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('version')), 'empty_value' => $this->getObject()->get('version'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_version[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductVersion';
  }

}
