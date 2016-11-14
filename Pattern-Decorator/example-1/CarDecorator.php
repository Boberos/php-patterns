<?php
class CarDecorator{
	protected $car;
	protected $gearMessage;
	protected $comfortMessage;
	
	public function __construct(Car $car_in){
		$this->car = $car_in;
		$this->comfortMessage = $car_in->comfortMessage;
	}
	
	function drive(){
		return 'Acceleration.'.$this->car->gearMessage.' Driving comfort is '.$this->comfortMessage;
	}
}