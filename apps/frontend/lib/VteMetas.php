<?php

class VteMetas
{
  private $_title;
  private $_desc;
  private $_keywds;
  
  private $_canonical;
  
  function __construct($title, $desc, $keywds, $canonical = null)
  {
    $this->_title = $title;
    $this->_desc = $desc;
    $this->_keywds = $keywds;
    $this->_canonical = $canonical;
  }
  
  function getTitle()
  {
    return $this->_title;
  }
  
  function getDesc()
  {
    return $this->_desc;
  }
  
  function getKeywds()
  {
    return $this->_keywds;
  }
  
  public function setCanonical($canonical)
  {
    $this->_canonical = $canonical;
  }
  
  public function hasCanonical()
  {
    return !empty($this->_canonical);
  }
  
  public function getCanonical()
  {
    return $this->_canonical ? : null;
  }
}
