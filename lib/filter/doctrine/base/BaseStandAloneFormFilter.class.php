<?php

/**
 * StandAlone filter form base class.
 *
 * @package    cartefinancement
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStandAloneFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'page_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fork'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'title'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'h1'              => new sfWidgetFormFilterInput(),
      'slug'            => new sfWidgetFormFilterInput(),
      'is_home'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'meta_title'      => new sfWidgetFormFilterInput(),
      'meta_desc'       => new sfWidgetFormFilterInput(),
      'meta_keywrds'    => new sfWidgetFormFilterInput(),
      'content'         => new sfWidgetFormFilterInput(),
      'menu_order'      => new sfWidgetFormFilterInput(),
      'is_main_section' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'parent_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'page_id'         => new sfValidatorPass(array('required' => false)),
      'fork'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'title'           => new sfValidatorPass(array('required' => false)),
      'h1'              => new sfValidatorPass(array('required' => false)),
      'slug'            => new sfValidatorPass(array('required' => false)),
      'is_home'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'meta_title'      => new sfValidatorPass(array('required' => false)),
      'meta_desc'       => new sfValidatorPass(array('required' => false)),
      'meta_keywrds'    => new sfValidatorPass(array('required' => false)),
      'content'         => new sfValidatorPass(array('required' => false)),
      'menu_order'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_main_section' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'parent_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Parent'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('stand_alone_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StandAlone';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'page_id'         => 'Text',
      'fork'            => 'Boolean',
      'title'           => 'Text',
      'h1'              => 'Text',
      'slug'            => 'Text',
      'is_home'         => 'Boolean',
      'meta_title'      => 'Text',
      'meta_desc'       => 'Text',
      'meta_keywrds'    => 'Text',
      'content'         => 'Text',
      'menu_order'      => 'Number',
      'is_main_section' => 'Boolean',
      'parent_id'       => 'ForeignKey',
    );
  }
}
