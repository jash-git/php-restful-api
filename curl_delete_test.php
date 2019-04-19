<?php
	$service_url = 'http://localhost/phprestfulapi/class/1';
	$ch = curl_init($service_url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	$curl_response = curl_exec($ch);
	if ($curl_response === false) {
		$info = curl_getinfo($ch);
		curl_close($ch);
		die('error occured during curl exec. Additioanl info: ' . var_export($info));
	}
	curl_close($ch);
	$decoded = json_decode($curl_response);
	if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		die('error occured: ' . $decoded->response->errormessage);
	}
	echo $curl_response;
?>