<?php
/* Smarty version 4.3.1, created on 2025-04-20 14:25:31
  from '/Users/radha/Sites/SugarEnt-copy/include/SearchForm/tpls/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_680503db736fd5_04765640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51187c34c1985d8f88c00de328ea21a2b268eb16' => 
    array (
      0 => '/Users/radha/Sites/SugarEnt-copy/include/SearchForm/tpls/header.tpl',
      1 => 1741847618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680503db736fd5_04765640 (Smarty_Internal_Template $_smarty_tpl) {
?>{*
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
<div class="clear"></div>
<div class='listViewBody'>
<?php echo '<script'; ?>
 type="text/javascript" src="{sugar_getjspath file='include/javascript/popup_parent_helper.js'}"><?php echo '</script'; ?>
>
{$TABS}
<?php if ($_smarty_tpl->tpl_vars['displayView']->value == 'saved_views') {
echo '<script'; ?>
>SUGAR.savedViews.handleForm();<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
>
function submitOnEnter(e)
{
    var characterCode = (e && e.which) ? e.which : event.keyCode;

    if (characterCode == 13) {
        document.getElementById('search_form').submit();
        return false;
    } else {
        return true;
    }
}
<?php echo '</script'; ?>
>
<form name='search_form' id='search_form' class='search_form' method='post' action='index.php?module={$module}&action={$action}' onkeydown='submitOnEnter(event);'>
{sugar_csrf_form_token}
<input type='hidden' name='searchFormTab' value='{$displayView}'/>
<input type='hidden' name='module' value='{$module}'/>
<input type='hidden' name='action' value='{$action}'/> 
<input type='hidden' name='query' value='true'/>
{foreach name=tabIteration from=$TAB_ARRAY key=tabkey item=tabData}
<div id='{$module}{$tabData.name}_searchSearchForm' style='{$tabData.displayDiv}' class="edit view search {$tabData.name}">{if $tabData.displayDiv}{else}{$return_txt}{/if}</div>
{/foreach}
<div id='{$module}saved_viewsSearchForm' <?php if ($_smarty_tpl->tpl_vars['displayView']->value != 'saved_views') {?>style='display: none;'<?php }?>>{$saved_views_txt}</div>
<?php }
}
