<?php

class Request{
	
	private $endpoint = "https://wsbexpress.dhl.com/rest/sndpt/";
	private $username = "";
	private $password = "";
    function __construct($username, $password) {
		$this->username = $username;
		$this->password = $password;
    }	
	
    function post_response($param, $post_data, ...$resources){
		
		
		$curl = curl_init();
		$url = $this->endpoint."/".implode("/",$resources)."?".http_build_query($param);

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $url,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $post_data,
		  CURLOPT_HTTPHEADER => array(
			"Accept: */*",
			"Accept-Encoding: gzip, deflate",
			"Authorization: Basic ". base64_encode($this->username.":".$this->password),
			"Cache-Control: no-cache",
			"Connection: keep-alive",
			"Content-Type: application/json",
			"Host: api.betsapi.com",
			"cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		
        return $response;	
	}
	
	
}