<?php

interface ISurface {
	public function SetWidth($width);
	public function GetWidth();
	public function SetHeight($height);
	public function GetHeight();
	public function ValidateCoordinate(Coordinate $coord);
}

