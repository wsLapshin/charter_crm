<?php /* Smarty version Smarty-3.1.7, created on 2015-12-24 15:26:37
         compiled from "/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1326616415567c0eadb85129-89526240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f059bc07bfe424d1ca9562ce9d150a8b494fa0' => 
    array (
      0 => '/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/ListViewHeader.tpl',
      1 => 1398442052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1326616415567c0eadb85129-89526240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'CRON_RECORD_MODEL' => 0,
    'MODULE_MODEL' => 0,
    'SUPPORTED_MODULE_MODELS' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_567c0eadc397f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567c0eadc397f')) {function content_567c0eadc397f($_smarty_tpl) {?>
<div class="listViewPageDiv"><div class="listViewTopMenuDiv"><div class="row-fluid"><div class="span6"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><div class="span6"><b class="pull-right paddingTop10"><?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->isDisabled()){?><?php echo vtranslate('LBL_DISABLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->isRunning()){?><?php echo vtranslate('LBL_RUNNING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->isEnabled()){?><?php if ($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->hadTimedout){?><?php echo vtranslate('LBL_LAST_SCAN_TIMED_OUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
.<?php }elseif($_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getLastEndDateTime()!=''){?><?php echo vtranslate('LBL_LAST_SCAN_AT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php echo $_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getLastEndDateTime();?>
&<?php echo vtranslate('LBL_TIME_TAKEN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:<?php echo $_smarty_tpl->tpl_vars['CRON_RECORD_MODEL']->value->getTimeDiff();?>
<?php echo vtranslate('LBL_SHORT_SECONDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php }?><?php }?></b></div></div><hr><div class="row-fluid"><span class="span4 btn-toolbar"><button class="btn addButton" <?php if (stripos($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateViewUrl(),'javascript:')===0){?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateViewUrl(),strlen('javascript:'));?>
;"<?php }else{ ?> onclick='window.location.href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateViewUrl();?>
"' <?php }?>><i class="icon-plus"></i>&nbsp;<strong><?php echo vtranslate('LBL_NEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo vtranslate('LBL_WORKFLOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><span class="span4 btn-toolbar"><select class="chzn-select" id="moduleFilter" ><option value=""><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TAB_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TAB_ID']->value = $_smarty_tpl->tpl_vars['MODULE_MODEL']->key;
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value==$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()){?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
"><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()=='Calendar'){?><?php echo vtranslate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
<?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
<?php }?></option><?php } ?></select></span><span class="span4 btn-toolbar"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div><div class="clearfix"></div></div><div class="listViewContentDiv" id="listViewContents">
<?php }} ?>