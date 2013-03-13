<?php

require_once dirname(__FILE__) . '/../config/config.php';

require_once PHPUNIT_PATH . '/PHPUnit/Autoload.php';

/**
 * Rover test case.
 */
class RoverTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var Rover
	 */
	private $Rover;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		$this->Rover = new Rover();
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		$this->Rover = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Tests Rover->Deploy()
	 */
	public function testDeploy() {
		$depl = $this->Rover->Deploy(Mars::GetInstance()->plateau, new Position(1, 1, Position::North));
		
		$this->assertEquals(true, $depl);
	}
	
	/**
	 * Tests Rover->IsDeployed()
	 */
	public function testIsDeployed() {
		$this->Rover->Deploy(Mars::GetInstance()->plateau, new Position(1, 1, Position::North));
		$this->assertEquals(true, $this->Rover->IsDeployed());
		$this->Rover->Deploy(Mars::GetInstance()->plateau, new Position(1999, 1999, Position::North));
		$this->assertEquals(false, $this->Rover->IsDeployed());
	}
	
	/**
	 * Tests Rover->Move()
	 */
	public function testMove() {
		$this->Rover->Deploy(Mars::GetInstance()->plateau, new Position(1, 2, Position::North));
		$this->Rover->Move();
		$this->assertEquals(3, $this->Rover->position->y);
	}
	
	/**
	 * Tests Rover->TurnLeft()
	 */
	public function testTurnLeft() {
		$this->Rover->Deploy(Mars::GetInstance()->plateau, new Position(1, 2, Position::North));
		$this->Rover->TurnLeft();
		$this->assertEquals(Position::West, $this->Rover->position->direction);
	}
	
	/**
	 * Tests Rover->TurnRight()
	 */
	public function testTurnRight() {
		$this->Rover->Deploy(Mars::GetInstance()->plateau, new Position(1, 2, Position::North));
		$this->Rover->TurnRight();
		$this->assertEquals(Position::East, $this->Rover->position->direction);
	
	}

}

