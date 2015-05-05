<?php

/**
 * Faq filter form base class.
 *
 * @package    cartefinancement
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFaqFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content'      => new sfWidgetFormFilterInput(),
      'lang'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'meta_title'   => new sfWidgetFormFilterInput(),
      'meta_desc'    => new sfWidgetFormFilterInput(),
      'meta_keywrds' => new sfWidgetFormFilterInput(),
      'published'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'version'      => new sfWidgetFormFilterInput(),
      'slug'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'title'        => new sfValidatorPass(array('required' => false)),
      'content'      => new sfValidatorPass(array('required' => false)),
      'lang'         => new sfValidatorPass(array('required' => false)),
      'meta_title'   => new sfValidatorPass(array('required' => false)),
      'meta_desc'    => new sfValidatorPass(array('required' => false)),
      'meta_keywrds' => new sfValidatorPass(array('required' => false)),
      'published'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'version'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'slug'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('faq_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Faq';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'title'        => 'Text',
      'content'      => 'Text',
      'lang'         => 'Text',
      'meta_title'   => 'Text',
      'meta_desc'    => 'Text',
      'meta_keywrds' => 'Text',
      'published'    => 'Boolean',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
      'version'      => 'Number',
      'slug'         => 'Text',
    );
  }
}
