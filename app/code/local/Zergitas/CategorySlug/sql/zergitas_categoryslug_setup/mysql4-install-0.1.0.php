<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 10/5/2018
 * Time: 5:13 PM
 */ 
/* @var $installer Mage_Catalog_Model_Resource_Setup  */
$installer = $this;

$installer->startSetup();

$installer->addAttribute('catalog_category', 'slug',  array(
    'type'     => 'text',
    'label'    => 'Slug',
    'input'    => 'text',
    'global'   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'           => true,
    'required'          => true,
    'user_defined'      => true,
    'default'           => '',
    'group'         => 'General Information',
    'unique' => true
));
$installer->endSetup();