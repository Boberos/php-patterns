<?php
class Car{
	
	public $gearMessage = 'Remember to shift up.';
	public $comfortMessage = 'standard.';
	
	function drive(){
		return 'Accelerating '.$this->gearMessage.'Driving comfort is '.$this->comfortMessage;
	}
	
}