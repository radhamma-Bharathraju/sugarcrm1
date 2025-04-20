<?php
/* Smarty version 4.3.1, created on 2025-04-20 14:25:31
  from '/Users/radha/Sites/SugarEnt-copy/modules/SavedSearch/SavedSearchSelects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_680503db6b3410_20860721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665aaa1049cacf6c032d3c4c5481372def0f861d' => 
    array (
      0 => '/Users/radha/Sites/SugarEnt-copy/modules/SavedSearch/SavedSearchSelects.tpl',
      1 => 1741847622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680503db6b3410_20860721 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value != null) {?>
<select style="width: auto !important; min-width: 150px;" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $_smarty_tpl->tpl_vars['SEARCH_MODULE']->value;?>
");'>
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>

</select>
<?php echo '<script'; ?>
>
	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)=='function'){
		fillInLabels();
	}
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
