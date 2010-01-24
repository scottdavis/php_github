<?php
	require_once('PHPUnit/Framework.php');
	require_once(__DIR__ . '/../lib/issues.php');
/**
* @package FrameworkTest
*/
class IssuesTest extends PHPUnit_Framework_TestCase {
	
	public function testIssueSearch() {
		$return = GitHub\Issues::search('rails', 'rails', GitHub\Issues::CLOSED, 'record');
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testIssueIssues() {
		$return = GitHub\Issues::get('rails', 'rails', GitHub\Issues::CLOSED);
		$this->assertTrue(is_a($return, 'stdClass'));
	}
	
	public function testIssueView() {
		$return = GitHub\Issues::view('jetviper21', 'nimblize', '7');
		$this->assertTrue(is_a($return, 'stdClass'));
	}

}