<?php /* Smarty version Smarty-3.1.7, created on 2015-12-19 13:35:02
         compiled from "/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/TimeFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93341083256755d0650b978-54399150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51dd4b72c3d881dbc070605261f2dfc596d16408' => 
    array (
      0 => '/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/TimeFieldSearchView.tpl',
      1 => 1398442052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93341083256755d0650b978-54399150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'SEARCH_VALUE' => 0,
    'USER_MODEL' => 0,
    'TIME_FORMAT' => 0,
    'FIELD_VALUE' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56755d0653bd6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56755d0653bd6')) {function content_56755d0653bd6($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars["SEARCH_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['SEARCH_VALUE']->value)){?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable('', null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars["TIME_FORMAT"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('hour_format'), null, 0);?><div class="row-fluid"><input type="text" data-format="<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
" class="span9 timepicker-default listSearchContributor" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' /></div><?php }} ?>