<?php

/**
 * faq actions.
 *
 * @package    cartefinancement
 * @subpackage faq
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class faqActions extends vteActions
{
  public function preExecute()
  {
    // On fixe l'élément du menu principal sélectionné
    $rootId = $this->getResponse()->setSlot('root_id', 'fork_faq');
  }
  
  public function executeIndex(sfWebRequest $request)
  {
    // Pour l'instant on récupère toutes les FAQ. La méthode pour les récupérer est définie dans routing.yml
    $this->faqs = FaqTable::getInstance()->getPublished($this->getUser()->getCulture());
    
    // on sette les métas
    $this->setMetas(
      sfConfig::get('app_faqs_home_title_'.$this->getUser()->getCulture()),
      sfConfig::get('app_faqs_home_desc_'.$this->getUser()->getCulture()),
      sfConfig::get('app_faqs_home_keywrds_'.$this->getUser()->getCulture())
    );
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $this->faq = $this->getRoute()->getObject();
    
    // On sette les métas
    $this->setMetas(
      $this->faq->getMetaTitle(),
      $this->faq->getMetaDesc(),
      $this->faq->getMetaKeywrds()
    );
    
    // On fixe l'élément du menu principal sélectionné : aucun !  les faq ne sont pas dans le menu principal
    $this->getResponse()->setSlot('root', null);
  }
}
