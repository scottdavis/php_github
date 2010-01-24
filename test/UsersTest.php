<?php
	require_once('PHPUnit/Framework.php');
	require_once(__DIR__ . '/../lib/users.php');
/**
* @package FrameworkTest
*/
class UsersTest extends PHPUnit_Framework_TestCase {
	
	public function testGetsUser() {
		$return = GitHub\Users::show('jetviper21');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testGetsFollowers() {
		$return = GitHub\Users::followers('jetviper21');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testGetsFollowing() {
		$return = GitHub\Users::following('jetviper21');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testGetsWatching() {
		$return = GitHub\Users::watching('jetviper21');
		$this->assertTrue(is_a($return, 'stdClass'));
	}

}