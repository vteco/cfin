<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version23 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('category', 'meta_title', 'string', '255', array(
             ));
        $this->addColumn('category', 'meta_desc', 'string', '255', array(
             ));
        $this->addColumn('category', 'meta_keywrds', 'string', '255', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('category', 'meta_title');
        $this->removeColumn('category', 'meta_desc');
        $this->removeColumn('category', 'meta_keywrds');
    }
}