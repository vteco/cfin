<?php

/**
 * StandAlone filter form.
 *
 * @package    cartefinancement
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class StandAloneFormFilter extends BaseStandAloneFormFilter
{
  public function configure()
  {
    $this->widgetSchema['parent_id']->setOption('method', 'getPageId');
  }
}
