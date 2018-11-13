<?php
ini_set("session.gc_maxlifetime", 300);
session_start();

function CallAPI($path,$data=[])
{
    $curl = curl_init();

    if ($path){
        $url = 'https://pro-api.coinmarketcap.com/v1/'.$path.'?'.http_build_query($data);
    }

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPHEADER, [
	    'X-CMC_PRO_API_KEY: 85d83bf3-2684-4c63-a962-bc601b1a4c6e'
	]);
    $result = curl_exec($curl);

    curl_close($curl);
    $_SESSION[$path] = $result;
    return $result;
}

if (isset($_REQUEST['callback'])){
	if (isset($_SESSION[$_REQUEST['path']])){
		$res = $_SESSION[$_REQUEST['path']];
	} else {
		$res = CallAPI($_REQUEST['path'],$_REQUEST['data']);
	}
	echo $_REQUEST['callback'].'('.$res.')';	
}