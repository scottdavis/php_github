<?php
	require_once('PHPUnit/Framework.php');
	require_once(__DIR__ . '/../lib/loader.php');
/**
* @package FrameworkTest
*/
class LoaderTest extends PHPUnit_Framework_TestCase {

	public function testGetsURL() {
		$return = GitHub\Loader::send('/repos/show/jetviper21/plow');
		$this->assertFalse($return === false);
		$this->assertFalse(empty($return));
	}
	
	public function testDataIsObject() {
		$return = GitHub\Loader::get_obj('/repos/show/jetviper21/plow');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	
	public function testLoginFailsOnProtectedRepoNoLogin() {
		$return = Github\Loader::send('/repos/show/jetviper21/otts', $type='POST', $auth = true);
		$this->assertFalse($return);
	}
	
}