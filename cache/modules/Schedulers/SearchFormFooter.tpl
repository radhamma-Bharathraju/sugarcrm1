
</form>
<script>
function toggleInlineSearch()
{
    var $trigger = $("#tabFormAdvLink");
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';
        $trigger.attr("title", "{sugar_translate label='LBL_ALT_HIDE_OPTIONS'}")
            .addClass('expanded');
    }else{
        $trigger.attr("title", "{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}")
            .removeClass("expanded");
        document.getElementById('showSSDIV').value = 'no';
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
</script>
