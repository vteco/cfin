<?php

/**
 * standalone actions.
 *
 * @package    cartefinancement
 * @subpackage standalone
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class standaloneActions extends vteActions
{
  public function executeHome(sfWebRequest $request)
  {
    // On sette l'objet de type 'standalone' 
    $this->page = $page = StandAloneTable::findHomePage($this->getUser()->getCulture());
    
    // Ses métas..
    $this->setMetas(
      $page->getMetaTitle(),
      $page->getMetaDesc(),
      $page->getMetaKeywrds()
    );
    
    // C'est la home
    $this->getResponse()->setSlot('is_home', true);
    $this->isHome = true;
    
    // La home a un attribut id sur le body
    $this->getResponse()->setSlot('page_id', 'page1');
      
    // Le template est commun
    $this->setTemplate('show');
    
    // On fixe l'élément du menu principal sélectionné : aucun !  c'est la home
    $this->getResponse()->setSlot('root_id', null);
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $this->isHome = false;
    
    // On sette l'objet de type 'standalone' 
    $this->page = $page = StandAloneTable::getInstance()->findOneBySlug($request->getParameter('slug'));
    
    /* TODO: le faire marcher 
    // Si c'est une page embranchement (fork), on redirige vers son premier enfant
    if($page->isFork())
      $this->redirect($this->generateUrl('generate-standalone', $this->getChildren()->getFirst()), 301);
    */
    
    // Ses métas..
    $this->setMetas(
      $page->getMetaTitle(),
      $page->getMetaDesc(),
      $page->getMetaKeywrds()
    );
    
    // On fixe l'élément du menu principal sélectionné : la racine de la page
    $this->getResponse()->setSlot('root_id', $this->page->getRoot()->getPageId());
  }
}
