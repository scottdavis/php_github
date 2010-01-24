<?php
	require_once('PHPUnit/Framework.php');
	require_once(__DIR__ . '/../lib/objects.php');
/**
* @package FrameworkTest
*/
class ObjectsTest extends PHPUnit_Framework_TestCase {

	public function testGetsTree() {
		$return = GitHub\Objects::tree('defunkt', 'facebox', 'a47803c9ba26213ff194f042ab686a7749b17476');
		$this->assertTrue(is_a($return, 'stdClass'));
	}

	public function testGetsBlob() {
		$return = GitHub\Objects::blob('defunkt', 'facebox', '365b84e0fd92c47ecdada91da47f2d67500b8e31', 'README.txt');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testGetsRaw() {
		$return = GitHub\Objects::raw('defunkt', 'facebox', 'd4fc2d5e810d9b4bc1ce67702603080e3086a4ed');
		$this->assertTrue(is_string($return));
		$this->assertTrue(strpos($return, 'Please visit') !== false);
	}
}