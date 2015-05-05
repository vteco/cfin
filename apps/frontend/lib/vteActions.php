<?php

class vteActions extends sfActions
{
  protected $_metas;
  
  public function setMetas($title, $desc, $keywds, $canonical = null)
  {
    $this->_metas = new VteMetas($title, $desc, $keywds, $canonical);
  }
  
  /* Ceci sert à setter les métas */
  public function postExecute()
  {
    if(!$this->_metas)
      throw new Exception("Metas are not set for this action");
    $this->getResponse()->setTitle($this->_metas->getTitle());
    $this->getResponse()->addMeta('description', $this->_metas->getDesc());
    $this->getResponse()->addMeta('keywords', $this->_metas->getKeywds());
    
    if($this->_metas->hasCanonical())
      $this->getResponse()->setSlot('canonical', $this->_metas->getCanonical());
  }
}
