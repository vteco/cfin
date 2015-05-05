<?php

/**
 * NewsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class NewsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object NewsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('News');
    }
    
    public static function getPublishedNews($sf_culture = 'fr')
    {
      return self::getInstance()
        ->createQuery('n')
        ->leftJoin('n.Category c')
        ->where('n.published = 1')
        ->andWhere('n.lang = ?', $sf_culture)
        ->orderBy('n.flag desc')
        ->addorderBy('n.created_at desc')
        ->execute();
    }
    
    public static function getPublishedBySlug($slug)
    {
      $news = self::getInstance()->findOneBySlug($slug);
      return $news->getPublished() ? $news : null;
    }
}