<?php

$job_strings[] = 'resave_contacts_daily';

function resave_contacts_daily() {
    require_once 'modules/Contacts/Contact.php';
    $contacts = new Contact();
    $result = $contacts->get_full_list();

    foreach ($result as $contact) {
        $contact->update_date_modified = false; // bonus point!
        $contact->save();
    }

    return true;
}
