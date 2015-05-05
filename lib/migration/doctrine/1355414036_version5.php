<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version5 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('faq_cat', 'faq_cat_product_id_product_id');
        $this->dropForeignKey('news_tag', 'news_tag_product_id_product_id');
    }

    public function down()
    {
        $this->createForeignKey('faq_cat', 'faq_cat_product_id_product_id', array(
             'name' => 'faq_cat_product_id_product_id',
             'local' => 'product_id',
             'foreign' => 'id',
             'foreignTable' => 'product',
             'onUpdate' => '',
             'onDelete' => 'SET NULL',
             ));
        $this->createForeignKey('news_tag', 'news_tag_product_id_product_id', array(
             'name' => 'news_tag_product_id_product_id',
             'local' => 'product_id',
             'foreign' => 'id',
             'foreignTable' => 'product',
             'onUpdate' => '',
             'onDelete' => 'SET NULL',
             ));
    }
}