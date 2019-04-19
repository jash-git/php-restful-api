﻿<?php
	//next eample will change status of specific conversation to resolve
	$service_url = 'http://localhost/phprestfulapi/class/1?name=SAT&count=23';
	$ch = curl_init($service_url);
	 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	$data = array("status" => 'R');
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
	$response = curl_exec($ch);
	if ($response === false) {
		$info = curl_getinfo($ch);
		curl_close($ch);
		die('error occured during curl exec. Additioanl info: ' . var_export($info));
	}
	curl_close($ch);
	$decoded = json_decode($response);
	if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		die('error occured: ' . $decoded->response->errormessage);
	}
	echo $response;
?>