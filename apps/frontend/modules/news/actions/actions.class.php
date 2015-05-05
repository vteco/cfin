<?php

/**
 * news actions.
 *
 * @package    cartefinancement
 * @subpackage news
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends vteActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  
  public function preExecute()
  {
    // On fixe l'élément du menu principal sélectionné
    $this->getResponse()->setSlot('root_id', 'fork_news');
  }
  
  public function executeIndex(sfWebRequest $request)
  {
    // Pour l'instant on récupère toutes les actus. La méthode pour les récupérer est définie dans routing.yml
    $this->newss = NewsTable::getPublishedNews($this->getUser()->getCulture());
    
    // on sette les métas
    $this->setMetas(
      sfConfig::get('app_news_home_title_'.$this->getUser()->getCulture()),
      sfConfig::get('app_news_home_desc_'.$this->getUser()->getCulture()),
      sfConfig::get('app_news_home_keywrds_'.$this->getUser()->getCulture())
    );
  }
  
  public function executeShow($request)
  {
    // On fixe l'élément du menu principal sélectionné
    $this->getResponse()->setSlot('root_id', 'fork_news');
    
    $this->news = NewsTable::getInstance()->getPublishedBySlug($request->getParameter('slug'));
    
    // On sette les métas
    $this->setMetas(
      $this->news->getMetaTitle(),
      $this->news->getMetaDesc(),
      $this->news->getMetaKeywrds()
    );
  }
  
  public function executeShowCategory($request)
  {
    $this->category = CategoryTable::getCategoryBySlug($request->getParameter('slug'));
    
    $this->newss = $this->category->getNewsByCulture($this->getUser()->getCulture());
    
    $this->setMetas(
      $this->category->getMetaTitle(),
      $this->category->getMetaDesc(),
      $this->category->getMetaKeywrds()
    );
  }
}
