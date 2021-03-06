<?php

class Home_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->restApiUrl 	= $this->config->item('rest_api_url');
		$this->apiAuthKey 	= $this->config->item('api_auth_key');
	}


	
	function productList()
	{
		$url = $this->restApiUrl. 'products/'.$this->apiAuthKey.'/';
		return json_decode($this->call_rest($url,'','get'));
	}
	
	function productTypeList()
	{
		$url = $this->restApiUrl. 'producttype/'.$this->apiAuthKey.'/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
	
	function productAreasList()
	{
		$url = $this->restApiUrl. 'productarea/'.$this->apiAuthKey.'/';
		$res = $this->call_rest($url,'','get');
		return json_decode($res);
	}
		
	//call rest API
	function call_rest($url,$data='',$method)
	{
		$function = 'simple_'.$method;
		$result = $this->curl->$function($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}
	
	function call_rest_post($url,$data='')
	{
		$result = $this->curl->simple_post($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));
		// echo "<pre />";
		// print_r($result);
		return $result;
	}
	
	
}