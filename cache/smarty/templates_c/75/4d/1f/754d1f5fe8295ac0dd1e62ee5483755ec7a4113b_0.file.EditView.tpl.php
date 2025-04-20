<?php
/* Smarty version 4.3.1, created on 2025-04-20 14:25:38
  from '/Users/radha/Sites/SugarEnt-copy/include/SugarFields/Fields/Time/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_680503e2343145_18111150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '754d1f5fe8295ac0dd1e62ee5483755ec7a4113b' => 
    array (
      0 => '/Users/radha/Sites/SugarEnt-copy/include/SugarFields/Fields/Time/EditView.tpl',
      1 => 1741847618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680503e2343145_18111150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/radha/Sites/SugarEnt-copy/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),));
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
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'idname', 'idname', null);
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {?>
    <?php $_smarty_tpl->_assignInScope('idname', $_smarty_tpl->tpl_vars['displayParams']->value['idName']);
}?>

<?php $_smarty_tpl->_assignInScope('flag_field', ($_smarty_tpl->tpl_vars['vardef']->value['name']).('_flag'));?>

<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<div id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_time"></div>
<?php if ($_smarty_tpl->tpl_vars['displayParams']->value['showFormats']) {?>
<span class="timeFormat">{$TIME_FORMAT}</span>
<?php }?>
</td>
</tr>
</table>
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" value="{$fields[<?php echo smarty_function_sugarvar(array('key'=>'name','stringFormat'=>true),$_smarty_tpl);?>
].value}">
<?php echo '<script'; ?>
 type="text/javascript" src="{sugar_getjspath file='include/SugarFields/Fields/Time/Time.js'}"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

//cleanup because this happens in a screwy order in a quickcreate, and the standard $(document).ready and YUI functions don't work quite right
var timeclosure_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
 = function(){ldelim}
	var idname = "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
";
	var timeField = "{$fields[<?php echo smarty_function_sugarvar(array('key'=>'name','stringFormat'=>true),$_smarty_tpl);?>
].value}";
	var timeFormat = "{$fields[<?php echo smarty_function_sugarvar(array('key'=>'name','stringFormat'=>true),$_smarty_tpl);?>
].value}";
	var tabIndex = "<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
";
	var callback = "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['updateCallback'];?>
";
	

	SUGAR.util.doWhen(typeof(Time) != "undefined", function(){
		var combo = new Time(timeField, idname, timeFormat, tabIndex);
		//Render the remaining widget fields
		var text = combo.html(callback);
		document.getElementById(idname + "_time").innerHTML = text;	
	});
{rdelim}
timeclosure_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
();
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
function update_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_available() {ldelim}
      YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_time_hours", this.handleOnAvailable, this);
{rdelim}

update_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_available.prototype.handleOnAvailable = function(me) {ldelim}
	//Call update for first time to round hours and minute values
	combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.update();
{rdelim}

var obj_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
 = new update_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_available();
<?php echo '</script'; ?>
><?php }
}
