<?php
include_once('vtlib/Vtiger/Menu.php'); 
include_once('vtlib/Vtiger/Module.php'); 
$module = Vtiger_Module::getInstance('SalesOrder'); 
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $module);
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'Driver'; 
$fieldInstance->label = 'Водитель'; 
$fieldInstance->uitype = 10; 
$fieldInstance->typeofdata = 'V~O'; 
$blockInstance->addField($fieldInstance); 
$fieldInstance->setRelatedModules(Array('Vendors')); 
?>
