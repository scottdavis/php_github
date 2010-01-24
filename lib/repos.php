<?php
namespace GitHub;

require_once(__DIR__ . '/loader.php');

/**
	* This Class wraps the repository api v2
	* @see http://develop.github.com/p/repo.html
	*/
class Repos {
	const SEARCH = '/repos/search/:q';
	const SHOW = '/repos/show/:user/:repo';
	const SHOW_ALL = '/repos/show/:user';
	const NETWORK = '/repos/show/:user/:repo/network';
	const REFS = '/repos/show/:user/:repo/tags';
	const BRANCHES = '/repos/show/:user/:repo/branches';
	
	/**
	 * Searching Repositories
	 * @param string $q - search question		
	 */
	public static function search($q) {
		$url = Loader::prep_url(self::SEARCH, compact('q'));
		return Loader::get_obj($url);
	}
	/**
	 * Show Repo Info
	 * @param string $user - username
	 * @param string $repo - repository name
	 */
	public static function show($user, $repo) {
		$url = Loader::prep_url(self::SHOW, compact('user', 'repo'));
		return Loader::get_obj($url);
	}
	/**
	 * List All Repositories
	 * @param string $user - username
	 */
	public static function show_all($user) {
		$url = Loader::prep_url(self::SHOW_ALL, compact('user'));
		return Loader::get_obj($url);
	}
	/**
	 * Network
	 * @param string $user - username
	 * @param string $repo - repository name
	 */
	public static function network($user, $repo) {
		$url = Loader::prep_url(self::NETWORK, compact('user', 'repo'));
		return Loader::get_obj($url);
	}
	/**
	 * Repository tags
	 * @param string $user - username
	 * @param string $repo - repository name
	 */
	public static function refs($user, $repo) {
		$url = Loader::prep_url(self::REFS, compact('user', 'repo'));
		return Loader::get_obj($url);
	}
	/**
	 * Repository branches
	 * @param string $user - username
	 * @param string $repo - repository name
	 */
	public static function branches($user, $repo) {
		$url = Loader::prep_url(self::BRANCHES, compact('user', 'repo'));
		return Loader::get_obj($url);
	}
}