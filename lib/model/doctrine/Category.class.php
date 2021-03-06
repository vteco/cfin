<?php

/**
 * Category
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    cartefinancement
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Category extends BaseCategory
{
  public function getNewsByCulture($culture = 'fr')
  {
    $newss = $this->getNews();
    foreach($newss as $i => $n)
      if($n->getLang() != $culture)
        $newss->offsetUnset($i);
    return $newss;
  }
}