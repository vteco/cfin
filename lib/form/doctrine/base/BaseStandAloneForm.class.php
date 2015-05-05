<?php

/**
 * StandAlone form base class.
 *
 * @method StandAlone getObject() Returns the current form's model object
 *
 * @package    cartefinancement
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStandAloneForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'page_id'         => new sfWidgetFormInputText(),
      'fork'            => new sfWidgetFormInputCheckbox(),
      'title'           => new sfWidgetFormInputText(),
      'h1'              => new sfWidgetFormInputText(),
      'slug'            => new sfWidgetFormInputText(),
      'is_home'         => new sfWidgetFormInputCheckbox(),
      'meta_title'      => new sfWidgetFormInputText(),
      'meta_desc'       => new sfWidgetFormInputText(),
      'meta_keywrds'    => new sfWidgetFormInputText(),
      'content'         => new sfWidgetFormTextarea(),
      'menu_order'      => new sfWidgetFormInputText(),
      'is_main_section' => new sfWidgetFormInputCheckbox(),
      'parent_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'page_id'         => new sfValidatorString(array('max_length' => 255)),
      'fork'            => new sfValidatorBoolean(array('required' => false)),
      'title'           => new sfValidatorString(array('max_length' => 255)),
      'h1'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'slug'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_home'         => new sfValidatorBoolean(array('required' => false)),
      'meta_title'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_desc'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_keywrds'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'content'         => new sfValidatorString(array('max_length' => 65535, 'required' => false)),
      'menu_order'      => new sfValidatorInteger(array('required' => false)),
      'is_main_section' => new sfValidatorBoolean(array('required' => false)),
      'parent_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'StandAlone', 'column' => array('page_id'))),
        new sfValidatorDoctrineUnique(array('model' => 'StandAlone', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('stand_alone[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StandAlone';
  }

}
