<?php
	require_once('PHPUnit/Framework.php');
	require_once(__DIR__ . '/../lib/repos.php');
/**
* @package FrameworkTest
*/
class ReposTest extends PHPUnit_Framework_TestCase {
	
	public function testGetsSearch() {
		$return = GitHub\Repos::search('ruby testing');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testGetsShow() {
		$return = GitHub\Repos::show('jetviper21', 'plow');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testGetsShowAll() {
		$return = GitHub\Repos::show_all('jetviper21');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testGetsNetwork() {
		$return = GitHub\Repos::network('jetviper21', 'plow');
		$this->assertTrue(is_a($return, 'stdClass'));
	}

	public function testGetsRefs() {
		$return = GitHub\Repos::refs('rails', 'rails');
		$this->assertTrue(is_a($return, 'stdClass'));
	}

	public function testGetsBranches() {
		$return = GitHub\Repos::branches('rails', 'rails');
		$this->assertTrue(is_a($return, 'stdClass'));
	}

}