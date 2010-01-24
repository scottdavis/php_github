<?php
namespace GitHub;

require_once(__DIR__ . '/loader.php');

/**
	* This Class wraps the user api v2
	* @see http://develop.github.com/p/users.html
	*/
class Users {
	const SEARCH = '/user/search/:search';
	const USER_INFO = '/user/show/:username';
	const FOLLOWERS = '/user/show/:user/followers';
	const FOLLOWING = '/user/show/:user/following';
	const WATCHED = '/repos/watched/:user';
	
	/**
		* Searches for a user
		* @param string $search - search query
		*/
	public static function search($search) {
		$url = Loader::prep_url(self::SEARCH, compact('search'));
		return Loader::get_obj($url);
	}
	
	/**
		* Gets user info
		* @param string $user - username
		*/
	public static function show($username) {
		$url = Loader::prep_url(self::USER_INFO, compact('username'));
		return Loader::get_obj($url);
	}
	
	/**
		* Gets followers for user
		* @param string $user - username
		*/	
	public static function followers($user) {
		$url = Loader::prep_url(self::FOLLOWERS, compact('user'));
		return Loader::get_obj($url);		
	}
	
	/**
		* Gets the following for user
		* @param string $user - username
		*/	
	public static function following($user) {
		$url = Loader::prep_url(self::FOLLOWING, compact('user'));
		return Loader::get_obj($url);		
	}
	
	/**
		* Gets the watched repos for user
		* @param string $user - username
		*/	
	public static function watching($user) {
		$url = Loader::prep_url(self::WATCHED, compact('user'));
		return Loader::get_obj($url);		
		
	}
	
	
}
