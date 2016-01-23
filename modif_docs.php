<?php
include_once('vtlib/Vtiger/Menu.php'); 
include_once('vtlib/Vtiger/Module.php'); 
$module = Vtiger_Module::getInstance('Documents'); 


$salesOrder = Vtiger_Module::getInstance('Vendors');
$salesOrder->setRelatedList($module, '', Array('ADD', 'SELECT'),'get_attachments');
?>
