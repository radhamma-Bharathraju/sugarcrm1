<?php
/* Smarty version 4.3.1, created on 2025-04-20 14:25:31
  from '/Users/radha/Sites/SugarEnt-copy/cache/modules/Schedulers/SearchFormFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_680503db74c794_92065139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0dd229b404eb7d396922939ca013ac82bcd2631' => 
    array (
      0 => '/Users/radha/Sites/SugarEnt-copy/cache/modules/Schedulers/SearchFormFooter.tpl',
      1 => 1745159131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680503db74c794_92065139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/radha/Sites/SugarEnt-copy/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>

</form>
<?php echo '<script'; ?>
>
function toggleInlineSearch()
{
    var $trigger = $("#tabFormAdvLink");
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';
        $trigger.attr("title", "<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_HIDE_OPTIONS'),$_smarty_tpl);?>
")
            .addClass('expanded');
    }else{
        $trigger.attr("title", "<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SHOW_OPTIONS'),$_smarty_tpl);?>
")
            .removeClass("expanded");
        document.getElementById('showSSDIV').value = 'no';
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
<?php echo '</script'; ?>
>
<?php }
}
