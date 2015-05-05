<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version20 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('news', 'news_category_id_category_id', array(
             'name' => 'news_category_id_category_id',
             'local' => 'category_id',
             'foreign' => 'id',
             'foreignTable' => 'category',
             ));
        $this->addIndex('news', 'news_category_id', array(
             'fields' => 
             array(
              0 => 'category_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('news', 'news_category_id_category_id');
        $this->removeIndex('news', 'news_category_id', array(
             'fields' => 
             array(
              0 => 'category_id',
             ),
             ));
    }
}