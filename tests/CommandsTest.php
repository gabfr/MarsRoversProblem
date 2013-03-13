<?php

require_once dirname(__FILE__) . '/../config/config.php';

require_once 'PHPUnit/Autoload.php';

/**
 * Commands test case.
 */
class CommandsTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var Commands
	 */
	private $Commands;
	
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
	 * Tests Commands::Parse()
	 */
	public function testParse() {
		// Like the problem said, first rover:
		Commands::Parse("1 2 N");
		$this->assertEquals("1 3 N", Commands::Parse("LMLMLMLMM"));
		// Second rover
		Commands::Parse("3 3 E");
		$this->assertEquals("5 1 E", Commands::Parse("MMRMMRMRRM"));
	}

}

