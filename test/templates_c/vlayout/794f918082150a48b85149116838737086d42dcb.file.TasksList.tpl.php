<?php /* Smarty version Smarty-3.1.7, created on 2015-12-26 03:31:38
         compiled from "/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/TasksList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1803487464567e0a1a650141-77227328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '794f918082150a48b85149116838737086d42dcb' => 
    array (
      0 => '/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/TasksList.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1803487464567e0a1a650141-77227328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'TASK_LIST' => 0,
    'TASK' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_567e0a1a6ccb7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567e0a1a6ccb7')) {function content_567e0a1a6ccb7($_smarty_tpl) {?>
<br><div class="row-fluid"><table class="table table-bordered table-condensed listViewEntriesTable"><thead><tr class="listViewHeaders"><th width="10%"><?php echo vtranslate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th width="30%"><?php echo vtranslate('LBL_TASK_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_TASK_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['TASK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TASK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TASK_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TASK']->key => $_smarty_tpl->tpl_vars['TASK']->value){
$_smarty_tpl->tpl_vars['TASK']->_loop = true;
?><tr class="listViewEntries"><td><input type="checkbox" class="taskStatus" data-statusurl="<?php echo $_smarty_tpl->tpl_vars['TASK']->value->getChangeStatusUrl();?>
" <?php if ($_smarty_tpl->tpl_vars['TASK']->value->isActive()){?> checked="" <?php }?> /></td><td><?php echo vtranslate($_smarty_tpl->tpl_vars['TASK']->value->getTaskType()->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['TASK']->value->getName();?>
<div class="pull-right actions"><span class="actionImages"><a data-url="<?php echo $_smarty_tpl->tpl_vars['TASK']->value->getEditViewUrl();?>
"><i class="icon-pencil alignMiddle" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></a>&nbsp;&nbsp;<a class="deleteTask" data-deleteurl="<?php echo $_smarty_tpl->tpl_vars['TASK']->value->getDeleteActionUrl();?>
"><i class="icon-trash alignMiddle" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></a></span></div></td><tr><?php } ?></tbody></table><?php if (empty($_smarty_tpl->tpl_vars['TASK_LIST']->value)){?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo vtranslate('LBL_NO_TASKS_ADDED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr></tbody></table><?php }?></div><?php }} ?>