<?php
namespace GitHub;

require_once(__DIR__ . '/loader.php');

/**
	* This Class wraps the issues api v2
	* @see http://develop.github.com/p/issues.html
	* @todo POST functions
	*/
class Issues {
	/** States */
	const OPEN = 'open';
	const CLOSED = 'closed';
	/** URLS */
	const SEARCH = '/issues/search/:user/:repo/:state/:search_term';
	const PROJECT = '/issues/list/:user/:repo/:state';
	const VIEW = '/issues/show/:user/:repo/:number';
	const OPEN = '/issues/open/:user/:repo';
	const CLOSE = '/issues/close/:user/:repo/:number';
	const REOPEN = '/issues/reopen/:user/:repo/:number';
	const EDIT = '/issues/edit/:user/:repo/:number';
	const LABELS = '/issues/labels/:user/:repo';
	const ADD_LABEL = '/issues/label/add/:user/:repo/:label/:number';
	const REMOVRE_LABEL = '/issues/label/remove/:user/:repo/:label/:number';
	const COMMENT = '/issues/comment/:user/:repo/:id';
	
	/**
		* Searches issues for the search term
		* @param string $user - username
		* @param string $repo - repository name
		* @param string $state - open | closed
		* @param string $search_term - term to search for
		*/
	public static function search($user, $repo, $state, $search_term) {
		$url = Loader::prep_url(self::SEARCH, compact('user', 'repo', 'state', 'search_term'));
		return Loader::get_obj($url);
	}
	/**
		* List a Projects Issues
		* @param string $user - username
		* @param string $repo - repository name
		* @param string $state - open | closed
		*/
	public function issues($user, $repo, $state) {
		$url = Loader::prep_url(self::PROJECT, compact('user', 'repo', 'state'));
		return Loader::get_obj($url);
	}
	/**
		* View an Issue
		* @param string $user - username
		* @param string $repo - repository name
		* @param string $number - issue number
		*/
	public function view($user, $repo, $number) {
		$url = Loader::prep_url(self::VIEW, compact('user', 'repo', 'number'));
		return Loader::get_obj($url);
	}
	/**
		* Gets the labels for the repo
		* @param string $user - username
		* @param string $repo - repository name
		*/
	public function labels($user, $repo) {
		$url = Loader::prep_url(self::LABELS, compact('user', 'repo'));
		return Loader::get_obj($url);
	}
	
	
}