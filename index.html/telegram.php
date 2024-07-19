<?php

function telegram($msg='Test'){
	
$token = '1948644956:AAHWZUULqDre00a2ROOuNNsITvD_BnRATts';//METS LE TOKKEN ICI
$chatid = '1383606942';//METS TON CHAT ID ICI
	
	
	
$link = 'https://api.telegram.org/bot'.$token.'';
 
$getupdate = file_get_contents($link.'/getUpdates');

 
$responsearray = json_decode($getupdate, TRUE);
 
 
$message = $msg;
 
$parameter = array(
 'chat_id' => $chatid, 
 'text' => $message
 );
 
$request_url = $link.'/sendMessage?'.http_build_query($parameter); 
 
if(file_get_contents($request_url))
	return true;
else
	return false;
}


?>