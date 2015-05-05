<?php class newsComponents extends sfComponents
{
  public function executeCategoryList(sfWebRequest $request)
  {
    $this->categories= CategoryTable::getInstance()->findByLang($this->getUser()->getCulture()); 
    $this->path = $request->getPathInfo();
  }
}
?>