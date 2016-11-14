<?php
include_once('CarSingleton.php');

class Customer{
	private $rentedCar;
	private $drivesCar = FALSE;
	
	function __construct(){}
	
	// can not rent car  twice  becouse throw error :P
	function rentCar(){
		
		$this->rentedCar = CarSingleton::rentCar();
		if($this->rentedCar==NULL){
			$this->drivesCar = FALSE;
		}else{
			$this->drivesCar=TRUE;
		}
		
	}
	
	function returnCar(){
		
		 $this->rentedCar->returnCar($this->rentedCar);
	}
	
	function getMakeAndModel(){
		if (TRUE == $this->drivesCar){
			return 'I drive '.$this->rentedCar->getMakeAndModel().' really fast!';
		}else{
			return "I can't rent this car.";
		}
	}
}