<?php
namespace GitHub;

require_once(__DIR__ . '/loader.php');

/**
	* This Class wraps the commit api v2
	* @see http://develop.github.com/p/commits.html
	*/
class Commits {
	const COMMITS = '/commits/list/:user_id/:repository/:branch';
	const SHOW_COMMIT = '/commits/show/:user_id/:repository/:sha';
	const SHOW_FILE = '/commits/list/:user_id/:repository/:branch/:path';
	/**
		* Listing Commits on a Branch
		* @param string $repository - repository name
		*	@param string $user_id - github user_id
		* @param string $branch - branch you want to load
		*/
	public static function repository($repository, $user_id, $branch) {
		$url = Loader::prep_url(self::COMMITS, compact('repository', 'user_id', 'branch'));
		return Loader::get_obj($url);
	}
	/**
		* Showing a Specific Commit
		* @param string $repository - repository name
		*	@param string $user_id - github user_id
		* @param string $hash - sha1 commit id
		*/
	public static function commit($repository, $user_id, $sha) {
		$url = Loader::prep_url(self::SHOW_COMMIT, compact('repository', 'user_id', 'sha'));
		return Loader::get_obj($url);
	}
	/**
		* Listing Commits for a File
		* @param string $repository - repository name
		*	@param string $user_id - github user_id
		* @param string $branch - branch you want to load
		* @param string $path - path to file in repo
		*/
	public static function file($repository, $user_id, $branch, $path) {
		$url = Loader::prep_url(self::SHOW_FILE, compact('repository', 'user_id', 'branch', 'path'));
		return Loader::get_obj($url);
	}
	
}