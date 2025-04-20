<?php
/* Smarty version 4.3.1, created on 2025-04-20 14:25:38
  from '/Users/radha/Sites/SugarEnt-copy/include/SugarFields/Fields/Datetimecombo/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_680503e2334356_94063949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9790bd60ac18be4bb5c4ce53d05d21d602eaa91' => 
    array (
      0 => '/Users/radha/Sites/SugarEnt-copy/include/SugarFields/Fields/Datetimecombo/EditView.tpl',
      1 => 1741847618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680503e2334356_94063949 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'idname', 'idname', null);
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {?>
    <?php $_smarty_tpl->_assignInScope('idname', $_smarty_tpl->tpl_vars['displayParams']->value['idName']);
}?>

<?php $_smarty_tpl->_assignInScope('flag_field', ($_smarty_tpl->tpl_vars['vardef']->value['name']).('_flag'));?>
<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_date" value="{$fields[<?php echo smarty_function_sugarvar(array('key'=>'name','stringFormat'=>true),$_smarty_tpl);?>
].value}" size="11" maxlength="10" title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vardef']->value['help'], "hexentity");?>
' tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" onblur="combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.update();" onchange="combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.update(); <?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['updateCallback']))) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['updateCallback'];
}?>"   <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?> >
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_trigger"{/capture}
{sugar_getimage name="jscalendar" ext=".gif" other_attributes="$other_attributes"}&nbsp;
<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['splitDateTime'])) {?>
</td>
<td nowrap>
<?php } else { ?>
<br>
<?php }?>
<div id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_time_section"></div>
<?php if ($_smarty_tpl->tpl_vars['displayParams']->value['showNoneCheckbox']) {
echo '<script'; ?>
 type="text/javascript">
function set_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_values(form) {ldelim}
 if(form.<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_flag.checked)  {ldelim}
	form.<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_flag.value=1;
	form.<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.value="";
	form.<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.readOnly=true;
 {rdelim} else  {ldelim}
	form.<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_flag.value=0;
	form.<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.readOnly=false;
 {rdelim}
{rdelim}
<?php echo '</script'; ?>
>
<?php }?>
</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['displayParams']->value['showFormats']) {?>
<tr valign="middle">
<td nowrap>
<span class="dateFormat">{$USER_DATEFORMAT|escape:'html'}</span>
</td>
<td nowrap>
<span class="dateFormat">{$TIME_FORMAT|escape:'html'}</span>
</td>
</tr>
<?php }?>
</table>
<input type="hidden" class="DateTimeCombo" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" value="{$fields[<?php echo smarty_function_sugarvar(array('key'=>'name','stringFormat'=>true),$_smarty_tpl);?>
].value}">
<?php echo '<script'; ?>
 type="text/javascript" src="{sugar_getjspath file="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"}"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
 = new Datetimecombo("{$fields[<?php echo smarty_function_sugarvar(array('key'=>'name','stringFormat'=>true),$_smarty_tpl);?>
].value}", "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
", "{$TIME_FORMAT|escape:'javascript'}", "<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
", '<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['showNoneCheckbox'];?>
', false, true);
//Render the remaining widget fields
text = combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.html('<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['updateCallback'];?>
');
document.getElementById('<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.jsscript('<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['updateCallback'];?>
'));

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('{$form_name}',"<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_date",'date',false,"<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
");
addToValidateBinaryDependency('{$form_name}', "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS|strip} {$APP.LBL_HOURS|strip}", "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_date");
addToValidateBinaryDependency('{$form_name}', "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS|strip} {$APP.LBL_MINUTES|strip}", "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_date");
addToValidateBinaryDependency('{$form_name}', "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS|strip} {$APP.LBL_MERIDIEM|strip}", "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_date");

YAHOO.util.Event.onDOMReady(function()
{ldelim}

	Calendar.setup ({ldelim}
	onClose : update_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
,
	inputField : "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_date",
	ifFormat : "{$CALENDAR_FORMAT|escape:'javascript'}",
	daFormat : "{$CALENDAR_FORMAT|escape:'javascript'}",
	button : "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: {$CALENDAR_FDOW|escape:'javascript'|default:'0'},
	comboObject: combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>

	{rdelim});

	//Call update for first time to round hours and minute values
	combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.update(false);

{rdelim}); 
<?php echo '</script'; ?>
>
<?php }
}
