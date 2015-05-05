<?php

/**
 * ProductContentVersion filter form base class.
 *
 * @package    cartefinancement
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductContentVersionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'product_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'parent_id'       => new sfWidgetFormFilterInput(),
      'menu_order'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'meta_title'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'meta_desc'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'meta_keywds'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'devis_btn_text'  => new sfWidgetFormFilterInput(),
      'is_main_section' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'summary'         => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'           => new sfValidatorPass(array('required' => false)),
      'product_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'parent_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'menu_order'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'meta_title'      => new sfValidatorPass(array('required' => false)),
      'meta_desc'       => new sfValidatorPass(array('required' => false)),
      'meta_keywds'     => new sfValidatorPass(array('required' => false)),
      'content'         => new sfValidatorPass(array('required' => false)),
      'devis_btn_text'  => new sfValidatorPass(array('required' => false)),
      'is_main_section' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'summary'         => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('product_content_version_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductContentVersion';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'title'           => 'Text',
      'product_id'      => 'Number',
      'parent_id'       => 'Number',
      'menu_order'      => 'Number',
      'meta_title'      => 'Text',
      'meta_desc'       => 'Text',
      'meta_keywds'     => 'Text',
      'content'         => 'Text',
      'devis_btn_text'  => 'Text',
      'is_main_section' => 'Boolean',
      'summary'         => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
      'version'         => 'Number',
    );
  }
}
