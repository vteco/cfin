<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version19 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('category', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'primary' => '1',
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'slug' => 
             array(
              'type' => 'string',
              'unique' => '1',
              'length' => '255',
             ),
             ), array(
             'type' => 'INNODB',
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
              1 => 'version',
             ),
             'collate' => 'utf8_general_ci',
             'charset' => 'utf8',
             ));
        $this->addColumn('news', 'category_id', 'integer', '8', array(
             'notnull' => '',
             ));
        $this->addColumn('news_version', 'category_id', 'integer', '8', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->dropTable('category');
        $this->removeColumn('news', 'category_id');
        $this->removeColumn('news_version', 'category_id');
    }
}