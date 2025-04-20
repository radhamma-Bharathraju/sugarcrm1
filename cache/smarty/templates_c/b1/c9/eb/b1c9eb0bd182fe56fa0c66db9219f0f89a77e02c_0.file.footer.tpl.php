<?php
/* Smarty version 4.3.1, created on 2025-04-20 14:25:38
  from '/Users/radha/Sites/SugarEnt-copy/include/EditView/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_680503e2355e58_90332626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c9eb0bd182fe56fa0c66db9219f0f89a77e02c' => 
    array (
      0 => '/Users/radha/Sites/SugarEnt-copy/include/EditView/footer.tpl',
      1 => 1741847618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680503e2355e58_90332626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/radha/Sites/SugarEnt-copy/include/SugarSmarty/plugins/function.sugar_button.php','function'=>'smarty_function_sugar_button',),1=>array('file'=>'/Users/radha/Sites/SugarEnt-copy/include/SugarSmarty/plugins/function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),));
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
<?php echo '<script'; ?>
 language="javascript">
    var _form_id = '{$form_id}';
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
<?php echo '</script'; ?>
>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<?php if (empty($_smarty_tpl->tpl_vars['form']->value['button_location']) || $_smarty_tpl->tpl_vars['form']->value['button_location'] == 'bottom') {?>
<div class="buttons">
<?php if (!empty($_smarty_tpl->tpl_vars['form']->value) && !empty($_smarty_tpl->tpl_vars['form']->value['buttons'])) {?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['buttons'], 'button', false, 'val');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
      <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>((string)$_smarty_tpl->tpl_vars['button']->value),'form_id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value),'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'appendTo'=>"footer_buttons",'location'=>"FOOTER"),$_smarty_tpl);?>

   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"SAVE",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value),'location'=>"FOOTER",'appendTo'=>"footer_buttons"),$_smarty_tpl);?>

<?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"CANCEL",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value),'location'=>"FOOTER",'appendTo'=>"footer_buttons"),$_smarty_tpl);?>

<?php }
if (empty($_smarty_tpl->tpl_vars['form']->value['hideAudit']) || !$_smarty_tpl->tpl_vars['form']->value['hideAudit']) {
echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"Audit",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value),'appendTo'=>"footer_buttons"),$_smarty_tpl);?>

<?php }
echo smarty_function_sugar_action_menu(array('buttons'=>$_smarty_tpl->tpl_vars['footer_buttons']->value,'class'=>"fancymenu",'flat'=>true),$_smarty_tpl);?>

</div>
<?php }?>
</form>
<?php if ($_smarty_tpl->tpl_vars['externalJSFile']->value) {?>
{sugar_include include=$externalJSFile}
<?php }?>

{$set_focus_block}

<?php if ((isset($_smarty_tpl->tpl_vars['scriptBlocks']->value))) {?>
<!-- Begin Meta-Data Javascript -->
<?php echo $_smarty_tpl->tpl_vars['scriptBlocks']->value;?>

<!-- End Meta-Data Javascript -->
<?php }
echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
<?php echo '</script'; ?>
>
<?php }
}
