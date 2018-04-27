<?php
$installer = $this;


$installer->startSetup();
/*
$installer->run("
ALTER TABLE {$this->getTable('cmsMenu/relation')}
      ADD CONSTRAINT FK_RELATION_PAGE FOREIGN KEY(ref_cms_page) REFERENCES 
      {$this->getTable('cms/page')}(page_id) ON DELETE CASCADE;
");*/

$installer->getConnection()->addForeignKey(
    $installer->getFkName($this->getTable('cmsMenu/relation'), 'ref_cms_page', $this->getTable('cms/page'), 'page_id'),
    $this->getTable('cmsMenu/relation'),
    'ref_cms_page',
    $this->getTable('cms/page'),
    'page_id',
    Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE

);
