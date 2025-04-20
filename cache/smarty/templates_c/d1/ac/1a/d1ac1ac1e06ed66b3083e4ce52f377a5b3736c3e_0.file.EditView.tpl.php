<?php
/* Smarty version 4.3.1, created on 2025-04-20 14:25:31
  from '/Users/radha/Sites/SugarEnt-copy/include/SugarFields/Fields/Base/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_680503db7021a2_91672719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1ac1ac1e06ed66b3083e4ce52f377a5b3736c3e' => 
    array (
      0 => '/Users/radha/Sites/SugarEnt-copy/include/SugarFields/Fields/Base/EditView.tpl',
      1 => 1741847618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680503db7021a2_91672719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/radha/Sites/SugarEnt-copy/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),1=>array('file'=>'/Users/radha/Sites/SugarEnt-copy/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),));
?>
{*
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
*}
{if strlen(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) <= 0}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'default_value','string'=>true),$_smarty_tpl);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }
{/if}  
<input type='text' name='<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>' 
    id='<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>' size='<?php echo (($tmp = $_smarty_tpl->tpl_vars['displayParams']->value['size'] ?? null)===null||$tmp==='' ? 30 ?? null : $tmp);?>
' 
    <?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['maxlength']))) {?>maxlength='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['maxlength'];?>
'<?php } elseif ((isset($_smarty_tpl->tpl_vars['vardef']->value['len']))) {?>maxlength='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['len'];?>
'<?php }?> 
    value='{$value}' title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vardef']->value['help'], "hexentity");?>
' <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex='<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
' <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?> <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
><?php }
}
