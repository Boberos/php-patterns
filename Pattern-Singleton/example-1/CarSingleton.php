<?php
	
/**
 * @author Kamil
 *
 */
class CarSingleton{
	
	private $make = 'Dodge';
	private $model = 'Viper';
	private static $car = NULL;
	private static $isRented = FALSE;
	
	private function __construct(){}
	
	static function rentCar(){
		if(FALSE == self::$isRented){
					if(NULL == self::$car){
						self::$car=new CarSingleton();
				}
				self::$isRented = TRUE;
				return self::$car;
			} else {
			return NULL;
		}
	}
	
	function returnCar(CarSingleton $carReturned){
		self::$isRented = FALSE;
	}
	
	function getMake(){return $this->make;}
	function  getModel(){return  $this->model;}
	function getMakeAndModel(){return $this->getMake().' '.$this->getModel();}
}
?>