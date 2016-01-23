<?php /* Smarty version Smarty-3.1.7, created on 2016-01-03 16:48:36
         compiled from "/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/Tasks/VTEntityMethodTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:966153761568950e4cd4905-52420646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61ee01cbab446f2772391cfa322b2bfe408ddd54' => 
    array (
      0 => '/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/Tasks/VTEntityMethodTask.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '966153761568950e4cd4905-52420646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'WORKFLOW_MODEL' => 0,
    'ENTITY_METHODS' => 0,
    'TASK_OBJECT' => 0,
    'METHOD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_568950e4d2e05',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568950e4d2e05')) {function content_568950e4d2e05($_smarty_tpl) {?>
<div class="row-fluid"><div class="span2"><?php echo vtranslate('LBL_METHOD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 :</div><div class="span8"><?php $_smarty_tpl->tpl_vars['ENTITY_METHODS'] = new Smarty_variable($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getEntityMethods(), null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['ENTITY_METHODS']->value)){?><div class="alert alert-info"><?php echo vtranslate('LBL_NO_METHOD_IS_AVAILABLE_FOR_THIS_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }else{ ?><select name="methodName" class="chzn-select"><?php  $_smarty_tpl->tpl_vars['METHOD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['METHOD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_METHODS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['METHOD']->key => $_smarty_tpl->tpl_vars['METHOD']->value){
$_smarty_tpl->tpl_vars['METHOD']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->methodName==$_smarty_tpl->tpl_vars['METHOD']->value){?>selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['METHOD']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select><?php }?></div></div>	<?php }} ?>