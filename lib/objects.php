<?php
namespace GitHub;

require_once(__DIR__ . '/loader.php');

/**
	* This Class wraps the objects api v2
	* @see http://develop.github.com/p/object.html
	*/
class Objects {
	const TREE = '/tree/show/:user/:repo/:tree_sha';
	const BLOB = '/blob/show/:user/:repo/:tree_sha/:path';
	const RAW = '/blob/show/:user/:repo/:sha';
	/**
	 * Trees
	 * @param string $user - username
	 * @param string $repo - repository
	 * @param string $tree_sha - sha1 hash for tree
	 */
	public static function tree($user, $repo, $tree_sha) {
		$url = Loader::prep_url(self::TREE, compact('user', 'repo', 'tree_sha'));
		return Loader::get_obj($url);
	}
	/**
	 * Blobs
	 * @param string $user - username
	 * @param string $repo - repository
	 * @param string $tree_sha - sha1 hash for tree
	 * @param string $path - file path 
	 */
	public static function blob($user, $repo, $tree_sha, $path) {
		$url = Loader::prep_url(self::BLOB, compact('user', 'repo', 'tree_sha', 'path'));
		return Loader::get_obj($url);
	}
	/**
	 * Raw Git Data
	 * @param string $user - username
	 * @param string $repo - repository
	 * @param string $sha - sha1 hash for object
	 * @return string
	 */
	public static function raw($user, $repo, $sha) {
		$url = Loader::prep_url(self::RAW, compact('user', 'repo', 'sha'));
		return Loader::send($url);
	}
	
}