<?php

   // include_once 'lib/nusoap.php';
    include("lib/nusoap.php");
    
    
    $name = 'Hassan ITANI';
    $parameters = array($name);

    $soap_cl = new soapclient2('http://127.0.0.1/SoapServer/index.php');

    $response = $soap_cl->call('getEmail',$parameters);
//echo"<pre>";
//print_r($soap_cl);
//die("</pre>");
    if(!$error = $soap_cl->getError()){
        echo 'Email: '.$response;
    }else{
        echo 'Error: '.$error;
    }


    //echo '<xmp>'.$soapClient->request.'</xmp>';
    //echo '<xmp>'.$soapClient->response.'</xmp>';

?>
