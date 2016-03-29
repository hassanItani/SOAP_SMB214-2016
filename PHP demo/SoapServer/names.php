<?php

function ws_get_email($parameters){
    $email = '';
    switch ($parameters) {
    case 'Hassan ITANI':
        $email = 'hasan-itani@hotmail.com';
        break;
    case 'Hassan':
        $email = 'hasan@hotmail.com';
        break;
    
    default:
        $email = 'no email found!';
    } 
    
    return $email;
}
