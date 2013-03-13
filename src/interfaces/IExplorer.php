<?php

interface IExplorer {
	public function Deploy(ISurface $surface, Position $position);
	public function IsDeployed();
	public function Move();
	public function TurnLeft();
	public function TurnRight();
}

