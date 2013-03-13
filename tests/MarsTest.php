<?php

require_once dirname(__FILE__) . '/../config/config.php';

/**
 * Mars test case.
 */
class MarsTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
	
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		
		parent::tearDown ();
	}
	
	/**
	 * Tests Mars::GetInstance()
	 */
	public function testGetInstance() {
		$this->assertInstanceOf("Mars", Mars::GetInstance());
		$this->assertInstanceOf("Plateau", Mars::GetInstance()->plateau);
	}

}

