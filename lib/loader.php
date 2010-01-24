<?php
namespace GitHub;

class Loader {
	
	const PREFIX = 'http://github.com/api/v2/json';

	static $user_agent = '';
	static $http_headers = array();
	static $token = '';
	static $login = '';
	
	public static function send($url, $type='GET', $auth = false) {
		//init curl 
		$curl = curl_init(self::PREFIX . $url);
		//set headers
		if($type=='post') {
			curl_setopt ($curl, CURLOPT_POST, 1);
		}
		
		if($auth) {
			$args['login'] = static::$login;
			$args['token'] = static::$token;
			 curl_setopt($curl, CURLOPT_POSTFIELDS, $args);
		}
		
    curl_setopt($curl, CURLOPT_VERBOSE, 0);
    curl_setopt($curl, CURLOPT_NOBODY, 0);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_USERAGENT, static::$user_agent);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, static::$http_headers);
		//send request
    $response = curl_exec($curl);
    $info = curl_getinfo($curl);
		curl_close($curl);
		return ((int) $info['http_code'] == 200) ? $response : false;
	}
	
	public static function get_obj() {
		$return = call_user_func_array(array('GitHub\Loader', 'send'), func_get_args());
		return static::process_json($return);
	}
	
	public static function process_json($string) {
		return json_decode($string);
	}
	
	
	public static function prep_url($url, $options) {
		foreach($options as $key => $val) {
			$url = str_replace(":$key", urlencode($val), $url);
		}
		return $url;
	}
	
}

?>