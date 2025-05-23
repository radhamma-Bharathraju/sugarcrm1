<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from modules/Currencies/Ext/LogicHooks/UpdateCurrencyConversion.php

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

/**
 * Define the before_save hook that will determine if the currency rate changed and kick off a job to update
 * all instances of that in the app.
 */
$hook_array['before_save'][] = [
    1,
    'updateCurrencyConversion',
    'modules/Currencies/CurrencyHooks.php',
    'CurrencyHooks',
    'updateCurrencyConversion',
];

?>
