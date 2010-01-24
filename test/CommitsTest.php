<?php
	require_once('PHPUnit/Framework.php');
	require_once(__DIR__ . '/../lib/commits.php');
/**
* @package FrameworkTest
*/
class CommitsTest extends PHPUnit_Framework_TestCase {

	public function testGetsRepo() {
		$return = GitHub\Commits::repository('plow', 'jetviper21', 'master');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testGetsFile() {
		$return = GitHub\Commits::file('plow', 'jetviper21', 'master', 'lib/plow.php');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testGetsCommit() {
		$return = GitHub\Commits::commit('plow', 'jetviper21', 'eb82a10506b5e6817b7d4ac2913b1d801fd52be9');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
}