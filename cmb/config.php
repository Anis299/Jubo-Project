<?php

add_action ('cmb2_admin_init','setHonorary');

function setHonorary(){

$cmb = new_cmb2_box([

    'title'         => 'Honorary Extra Section',
    'id'            => 'honoExtra',
    'object_types'  => 'honorary',

]);

$cmb -> add_field([

    'name'          => 'Facebook',
    'id'            => 'fblink',
    'type'          => 'text',

]);

$cmb -> add_field([

    'name'          => 'Instagram',
    'id'            => 'inlink',
    'type'          => 'text',

]);

$cmb -> add_field([

    'name'          => 'LinkedIn',
    'id'            => 'lnlink',
    'type'          => 'text',

]);

};

add_action('cmb2_admin_init','serviceIcon');

function serviceIcon(){

$cmb = new_cmb2_box([

        'title'         => 'Service Icon',
        'id'            => 'servIcon',
        'object_types'  => 'service',
    
]);
    
$cmb -> add_field([
    
        'name'          => 'Code',
        'id'            => 'codeLink',
        'type'          => 'text',
    
    ]);

};







?>