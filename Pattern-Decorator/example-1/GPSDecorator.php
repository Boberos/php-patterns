<?php
include_once 'CarDecorator.php';
class GPSDecorator extends CarDecorator{
	protected $decorator;
	public function __construct(CarDecorator $decorator_in){
		$this->decorator = $decorator_in;
	}
	
	public function installGPS(){
		$this->decorator->comfortMessage = 'Very high';
	}
}