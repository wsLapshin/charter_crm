<?php /* Smarty version Smarty-3.1.7, created on 2015-12-24 15:26:28
         compiled from "/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/MailConverter/EditHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1140840775567c0ea40adcb7-57385989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbdcd166d41e4385907ec0079e81c75ba47e6e8' => 
    array (
      0 => '/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Settings/MailConverter/EditHeader.tpl',
      1 => 1398442052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1140840775567c0ea40adcb7-57385989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CREATE' => 0,
    'RECORD_ID' => 0,
    'STEP' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_567c0ea410287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567c0ea410287')) {function content_567c0ea410287($_smarty_tpl) {?>
<div class="listViewPageDiv"><input type="hidden" id="create" value="<?php echo $_smarty_tpl->tpl_vars['CREATE']->value;?>
" /><input type="hidden" id="recordId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" id="step" value="<?php echo $_smarty_tpl->tpl_vars['STEP']->value;?>
" /><h3><?php if ($_smarty_tpl->tpl_vars['CREATE']->value=='new'){?><?php echo vtranslate('LBL_ADDING_NEW_MAILBOX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_EDIT_MAILBOX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></h3><hr><div><ul class="crumbs" style="margin-left: 65px;margin-top:10px;"><li class="first step"  style="z-index:9" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('MAILBOX_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li style="z-index:8" class="step" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('SELECT_FOLDERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><?php if ($_smarty_tpl->tpl_vars['CREATE']->value=='new'){?><li class="step last" style="z-index:7" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo vtranslate('ADD_RULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><?php }?></ul></div><div class="clearfix"></div></div><?php }} ?>