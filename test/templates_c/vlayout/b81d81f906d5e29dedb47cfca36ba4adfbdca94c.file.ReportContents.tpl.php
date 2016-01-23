<?php /* Smarty version Smarty-3.1.7, created on 2015-12-26 13:02:47
         compiled from "/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Reports/ReportContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167726166456755f947737f1-11458213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b81d81f906d5e29dedb47cfca36ba4adfbdca94c' => 
    array (
      0 => '/home/c/charter7ru/crm/public_html/includes/runtime/../../layouts/vlayout/modules/Reports/ReportContents.tpl',
      1 => 1451134963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167726166456755f947737f1-11458213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56755f9495a47',
  'variables' => 
  array (
    'NEW_COUNT' => 0,
    'CALCULATION_FIELDS' => 0,
    'MODULE' => 0,
    'COLUMNS' => 0,
    'CALCULATION_FIELD' => 0,
    'CALCULATION_FIELD_KEYS' => 0,
    'ESCAPE_CHAR' => 0,
    'FIELD_IMPLODE' => 0,
    'FIELD_LABEL' => 0,
    'MODULE_NAME' => 0,
    'subindex' => 0,
    'CALCULATION_VALUE' => 0,
    'COLUMN' => 0,
    'PRIMARY_MODULE' => 0,
    'BASE_CURRENCY_INFO' => 0,
    'DATA' => 0,
    'HEADERS' => 0,
    'NAME' => 0,
    'DATAGROUPED' => 0,
    'groupval' => 0,
    'val' => 0,
    'summval' => 0,
    'row' => 0,
    'rowValue' => 0,
    'LIMIT_EXCEEDED' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56755f9495a47')) {function content_56755f9495a47($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/c/charter7ru/crm/public_html/libraries/Smarty/libs/plugins/modifier.replace.php';
?>
<div class="contents-topscroll"><div class="topscroll-div container-fluid">&nbsp;</div></div><div id="reportDetails" class="contents-bottomscroll"><div class="bottomscroll-div"><input type="hidden" id="updatedCount" value="<?php echo $_smarty_tpl->tpl_vars['NEW_COUNT']->value;?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['CALCULATION_FIELDS']->value)){?><table class=" table-bordered table-condensed marginBottom10px" width="100%" style="width:500px;margin:20px auto;"><thead><tr class="blockHeader"><th><?php echo vtranslate('LBL_FIELD_NAMES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php echo $_smarty_tpl->tpl_vars['CALCULATION_FIELDS']->value['SalesOrder_Total_SUM'];?>
</th><?php if ($_smarty_tpl->tpl_vars['COLUMNS']->value['SUM']){?><th><?php echo vtranslate('LBL_SUM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><?php }?><?php if ($_smarty_tpl->tpl_vars['COLUMNS']->value['AVG']){?><th><?php echo vtranslate('LBL_AVG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><?php }?><?php if ($_smarty_tpl->tpl_vars['COLUMNS']->value['MIN']){?><th><?php echo vtranslate('LBL_MIN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><?php }?><?php if ($_smarty_tpl->tpl_vars['COLUMNS']->value['MAX']){?><th><?php echo vtranslate('LBL_MAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><?php }?></tr></thead><?php $_smarty_tpl->tpl_vars['ESCAPE_CHAR'] = new Smarty_variable(array('_SUM','_AVG','_MIN','_MAX'), null, 0);?><?php  $_smarty_tpl->tpl_vars['CALCULATION_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CALCULATION_FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CALCULATION_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CALCULATION_FIELD']->key => $_smarty_tpl->tpl_vars['CALCULATION_FIELD']->value){
$_smarty_tpl->tpl_vars['CALCULATION_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['CALCULATION_FIELD']->key;
?><tr><?php $_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEYS'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['CALCULATION_FIELD']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEYS'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEYS']->value,$_smarty_tpl->tpl_vars['ESCAPE_CHAR']->value,''), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_IMPLODE'] = new Smarty_variable(explode('_',$_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEYS']->value['0']), null, 0);?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_IMPLODE']->value['0'], null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_variable(implode(" ",$_smarty_tpl->tpl_vars['FIELD_IMPLODE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value,''), null, 0);?><td><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><?php  $_smarty_tpl->tpl_vars['CALCULATION_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CALCULATION_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['subindex'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CALCULATION_FIELD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CALCULATION_VALUE']->key => $_smarty_tpl->tpl_vars['CALCULATION_VALUE']->value){
$_smarty_tpl->tpl_vars['CALCULATION_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['subindex']->value = $_smarty_tpl->tpl_vars['CALCULATION_VALUE']->key;
?><?php $_smarty_tpl->tpl_vars['COLUMN'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['subindex']->value,-3,3), null, 0);?><?php if ($_smarty_tpl->tpl_vars['CALCULATION_VALUE']->value!=''){?><td width="15%"><?php echo $_smarty_tpl->tpl_vars['CALCULATION_VALUE']->value;?>
</td><?php }elseif($_smarty_tpl->tpl_vars['COLUMNS']->value[$_smarty_tpl->tpl_vars['COLUMN']->value]){?><td></td><?php }?><?php } ?></tr><?php } ?></table><?php if ($_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value=='Invoice'||$_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value=='Quotes'||$_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value=='SalesOrder'||$_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value=='PurchaseOrder'){?><?php $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO'] = new Smarty_variable(Vtiger_Util_Helper::getCurrentInfoOfUser(), null, 0);?><div class="alert alert-info"><?php echo vtranslate('LBL_NOTE','Vtiger');?>
 : <?php echo vtranslate('LBL_CALCULATION_CONVERSION_MESSAGE','Reports');?>
 - <?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO']->value['currency_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_INFO']->value['currency_code'];?>
)</div><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['DATA']->value!=''){?><?php $_smarty_tpl->tpl_vars['HEADERS'] = new Smarty_variable($_smarty_tpl->tpl_vars['DATA']->value[0], null, 0);?><div class="container"><div class="panel panel-default"><table class="table table-bordered"><tr colspan="8" class="blockHeader panel-heading" ><?php  $_smarty_tpl->tpl_vars['HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER']->_loop = false;
 $_smarty_tpl->tpl_vars['NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER']->key => $_smarty_tpl->tpl_vars['HEADER']->value){
$_smarty_tpl->tpl_vars['HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['NAME']->value = $_smarty_tpl->tpl_vars['HEADER']->key;
?><td nowrap><?php echo vtranslate($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><?php } ?></tr><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['groupval'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DATAGROUPED']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['groupval']->value = $_smarty_tpl->tpl_vars['val']->key;
?><tr data-rel="parent" data-groupval="<?php echo $_smarty_tpl->tpl_vars['groupval']->value;?>
" style="background: grey; color: black; cursor:pointer;"><?php  $_smarty_tpl->tpl_vars['summval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['summval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['summary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['summval']->key => $_smarty_tpl->tpl_vars['summval']->value){
$_smarty_tpl->tpl_vars['summval']->_loop = true;
?><td><?php echo $_smarty_tpl->tpl_vars['summval']->value;?>
</td><?php } ?></tr><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><tr data-rel="children_<?php echo $_smarty_tpl->tpl_vars['groupval']->value;?>
"  style="display:none;"><?php  $_smarty_tpl->tpl_vars['rowValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowValue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowValue']->key => $_smarty_tpl->tpl_vars['rowValue']->value){
$_smarty_tpl->tpl_vars['rowValue']->_loop = true;
?><td><?php echo $_smarty_tpl->tpl_vars['rowValue']->value;?>
</td><?php } ?></tr><?php } ?><?php } ?></table></div></div>
            <script>
                $('tr[data-rel="parent"]').on('click', function(){
                    var groupval = $(this).attr('data-groupval'),
                        childrenEls = $('tr[data-rel="children_'+groupval+'"]');

                    if ( $(this).hasClass('active') ) {
                        $(this).removeClass('active');
                        childrenEls.hide();
                    } else {
                        $(this).addClass('active');
                        childrenEls.show();
                    }
                });
            </script>
            </table><?php if ($_smarty_tpl->tpl_vars['LIMIT_EXCEEDED']->value){?><center><?php echo vtranslate('LBL_LIMIT_EXCEEDED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <span class="pull-right"><a href="#top" ><?php echo vtranslate('LBL_TOP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span></center><?php }?><?php }else{ ?><?php echo vtranslate('LBL_NO_DATA_AVAILABLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></div></div><br></div></div>
<?php }} ?>