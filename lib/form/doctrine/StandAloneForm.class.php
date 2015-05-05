<?php

/**
 * StandAlone form.
 *
 * @package    cartefinancement
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class StandAloneForm extends BaseStandAloneForm
{
  public function configure()
  {
    $this->setDefault('fork', false);
    $this->setDefault('is_main_section', false);
    $this->setDefault('is_home', false);
    
    // Le parent_id ne peut pas etre lui-meme => requête dédiée
    $query = StandAloneTable::getInstance()->createQuery('s');
    if( !$this->getObject()->isNew() )
      $query->where('s.id != ?', $this->getObject()->getId());
    
    $this->widgetSchema['parent_id']->setOption('query', $query);
    
    $this->widgetSchema['parent_id']->setOption('method', 'getPageId');
    $this->widgetSchema['slug']->setLabel('http://domain/');
  }
}
