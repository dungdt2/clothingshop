<?php
$installer = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();
$installer->addAttribute('catalog_product', 'size', array(
    'group'           => 'General',
    'label'           => 'Size',
    'input'           => 'select',
    'type'            => 'varchar',
    'required'        => 0,
    'visible_on_front'=> 1,
    'filterable'      => 1,
    'searchable'      => 1,
    'comparable'      => 1,
    'user_defined'    => 1,
    'is_configurable' => 1,
    'global'          => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'note'            => '',
));
$installer->endSetup();