<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version15 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('faq', 'meta_title', 'string', '255', array(
             ));
        $this->addColumn('faq', 'meta_desc', 'string', '255', array(
             ));
        $this->addColumn('faq', 'meta_keywrds', 'string', '255', array(
             ));
        $this->addColumn('news', 'meta_title', 'string', '255', array(
             ));
        $this->addColumn('news', 'meta_desc', 'string', '255', array(
             ));
        $this->addColumn('news', 'meta_keywrds', 'string', '255', array(
             ));
        $this->addColumn('faq_version', 'meta_title', 'string', '255', array(
             ));
        $this->addColumn('faq_version', 'meta_desc', 'string', '255', array(
             ));
        $this->addColumn('faq_version', 'meta_keywrds', 'string', '255', array(
             ));
        $this->addColumn('news_version', 'meta_title', 'string', '255', array(
             ));
        $this->addColumn('news_version', 'meta_desc', 'string', '255', array(
             ));
        $this->addColumn('news_version', 'meta_keywrds', 'string', '255', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('faq', 'meta_title');
        $this->removeColumn('faq', 'meta_desc');
        $this->removeColumn('faq', 'meta_keywrds');
        $this->removeColumn('news', 'meta_title');
        $this->removeColumn('news', 'meta_desc');
        $this->removeColumn('news', 'meta_keywrds');
        $this->removeColumn('faq_version', 'meta_title');
        $this->removeColumn('faq_version', 'meta_desc');
        $this->removeColumn('faq_version', 'meta_keywrds');
        $this->removeColumn('news_version', 'meta_title');
        $this->removeColumn('news_version', 'meta_desc');
        $this->removeColumn('news_version', 'meta_keywrds');
    }
}