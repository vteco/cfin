<?php

class faqComponents extends sfComponents
{
  protected function common()
  {
    $this->max = $this->max ? : 4;
    $this->faqs = FaqTable::getLatest($this->max, $this->getUser()->getCulture());
  }
  
  public function executeLatestLignes(sfWebRequest $request)
  {
    $this->common();
  }
  
  public function executeLatestLeft(sfWebRequest $request)
  {
    $this->common();
  }
}
