<?php

/**
 * ProductContentVersion form base class.
 *
 * @method ProductContentVersion getObject() Returns the current form's model object
 *
 * @package    cartefinancement
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductContentVersionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'title'           => new sfWidgetFormInputText(),
      'product_id'      => new sfWidgetFormInputText(),
      'parent_id'       => new sfWidgetFormInputText(),
      'menu_order'      => new sfWidgetFormInputText(),
      'meta_title'      => new sfWidgetFormInputText(),
      'meta_desc'       => new sfWidgetFormInputText(),
      'meta_keywds'     => new sfWidgetFormInputText(),
      'content'         => new sfWidgetFormTextarea(),
      'devis_btn_text'  => new sfWidgetFormInputText(),
      'is_main_section' => new sfWidgetFormInputCheckbox(),
      'summary'         => new sfWidgetFormTextarea(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'version'         => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'           => new sfValidatorString(array('max_length' => 255)),
      'product_id'      => new sfValidatorInteger(),
      'parent_id'       => new sfValidatorInteger(array('required' => false)),
      'menu_order'      => new sfValidatorInteger(),
      'meta_title'      => new sfValidatorString(array('max_length' => 255)),
      'meta_desc'       => new sfValidatorString(array('max_length' => 255)),
      'meta_keywds'     => new sfValidatorString(array('max_length' => 255)),
      'content'         => new sfValidatorString(array('max_length' => 65535)),
      'devis_btn_text'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_main_section' => new sfValidatorBoolean(array('required' => false)),
      'summary'         => new sfValidatorString(array('max_length' => 65535, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
      'version'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('version')), 'empty_value' => $this->getObject()->get('version'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_content_version[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductContentVersion';
  }

}
