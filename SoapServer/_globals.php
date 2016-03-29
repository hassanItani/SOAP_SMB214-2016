<?php 
$GLOBALS['AGENCY_NAME_en'] 			= "UTT";
$GLOBALS['AGENCY_NAME_ar'] 			= "UTT";
$GLOBALS['AGENCY_LOGO_URL'] 		= "";
$GLOBALS['PCODE'] 					= "0746i708fm";
$GLOBALS['PSCODE'] 					= "f1487758929203f76d7c46c9b61d162e";
$GLOBALS['PSITE'] 					= "www.server.dev/Training/Training_4/FrontDesk";
$GLOBALS['REFER_PAGE'] 				= "http://www.server.dev/Training/Training_4/FrontDesk/";
$GLOBALS['SERVICE_URL'] 			= "www.server.dev/version446";
$GLOBALS['IS_TO_PARTNER'] 			= true;
$GLOBALS['OP_NAME'] 				= "UTT";
$GLOBALS['h7_user_name'] 			= 'P12GM';
$GLOBALS['h7_user_pass'] 			= '111111';
$GLOBALS['REQUEST_HANDLER_URL'] 	= 'http://'.$SERVICE_URL.'/partners/c3949ba59ab/request_handler/process_request.php?pcode='.$PCODE.'&pscode='.$PSCODE.'&frames=no';
$GLOBALS['REQUEST_URL_IBE'] 		= 'http://'.$SERVICE_URL.'/webservice/IBE/request_handler/process_request.php?pcode='.$PCODE.'&pscode='.$PSCODE.'&frames=no';
$GLOBALS['COUNTRY'] 				= array('SAUDI ARABIA');
$GLOBALS['CHEAPEST_PRICE_COUNTRY'] 	= 'SAUDI ARABIA';
$GLOBALS['IMP_CITIES_COUNTRY'] 		= 'SAUDI ARABIA';
$GLOBALS['CHEAPEST_PRICE_COUNTRY'] 	= 'SAUDI ARABIA';
$GLOBALS['EMAIL_FROM'] 				= 'info@flyutt.com';
$GLOBALS['USE_ACOMM'] 				= true;


$client_lib_path = "client_library_25/";
include_once($client_lib_path."initialization.php"); 
$client_var = array(USER, FLIGHT, HOTELS_IBE, CARS_IBE, HOTEL, MIKI_HOTELS, AEU_CARS, SERVICES, HSXML_HOTELS, TO, TOURS, FAR, A2B_transfers,HSXML_TRANSFERS);
initialize_webservice($client_var);
include_once($client_lib_path."client_lib.php");


?>
