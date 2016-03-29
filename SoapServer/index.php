<?php

    include("lib/nusoap.php");

    $soapServer = new soap_server;
    $soapServer->register('getEmail');

    function getEmail($parameters)
    {return 'test';
        //include("names.php");
        //return ws_get_email($parameters);
        //return 'test';
    }
    
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
    $soapServer->service($HTTP_RAW_POST_DATA);

?>

