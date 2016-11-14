<?php
include_once '../CarDecorator.php';

class AutomaticTransmissionDecorator extends CarDecorator{
	protected $decorator;
	public function __construct(CarDecorator $decorator_in){
		$this->decorator = $decorator_in;
	}
	
	public function installAutomaticTransmission(){
		$this->decorator->car->gearMessage = 'Auto transmission shift up.';
	}
}