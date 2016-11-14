<?php include_once('Customer.php');?>
<html>
	<head>
		<title>patterns</title>
	</head>
	
	<body>
	<div>
	<h1>PATTERNS: SINGLETON example 1</h1>
	<?php 
		$Customer_1 = new Customer();
		$Customer_2 = new Customer();
		
		echo 'Customer_1 wants to rent the car. <br/>';
		$Customer_1->rentCar();
		echo  'Customer_1 says: '.$Customer_1->getMakeAndModel().'<br/>';
		echo '<br/>';
		echo 'Customer_2 whants to rent the car. <br/>';
		$Customer_2->rentCar();
		echo  'Customer_2 says: '.$Customer_2->getMakeAndModel().'<br/>';
		echo '<br/>';
		$Customer_1->returnCar();
		echo  'Customer_1 returned the car. <br/>';
		echo '<br/>';
		echo 'Customer_2 whants to rent the car. Again.'.'<br/>';
		$Customer_2->rentCar();
		echo  'Customer_2 says: '.$Customer_2->getMakeAndModel().'<br/>';
		echo '<br/>';
		
	?>
	</div>
	<hr/>
	<div>
	<h3>Source code</h3>
	<h5>
	class CarSingleton{<br/>
	
	private $make = 'Dodge';<br/>
	private $model = 'Viper';<br/>
	private static $car = NULL;<br/>
	private static $isRented = FALSE;<br/><br/>
	
	private function __construct(){}<br/><br/>
	
	static function rentCar(){<br/>
		if(FALSE == self::$isRented){<br/>
					if(NULL == self::$car){<br/>
						self::$car=new CarSingleton();<br/>
				}<br/>
				self::$isRented = TRUE;<br/>
				return self::$car;<br/>
			} else {<br/>
			return NULL;<br/>
		}<br/>
	}<br/><br/>
	
	function returnCar(CarSingleton $carReturned){<br/>
		self::$isRented = FALSE;<br/>
	}<br/><br/>
	
	function getMake(){return $this->make;}<br/>
	function  getModel(){return  $this->model;}<br/>
	function getMakeAndModel(){return $this->getMake().' '.$this->getModel();}<br/>
}<br/>
	</h5>
	<hr/>
	
	<h5>
	include_once('CarSingleton.php');<br/><br/>

class Customer{<br/>
	private $rentedCar;<br/>
	private $drivesCar = FALSE;<br/><br/>
	
	function __construct(){}<br/><br/>
	
	// can not rent car  twice  becouse throw error :P
	function rentCar(){<br/>
		
		$this->rentedCar = CarSingleton::rentCar();<br/>
		if($this->rentedCar==NULL){<br/>
			$this->drivesCar = FALSE;<br/>
		}else{<br/>
			$this->drivesCar=TRUE;<br/>
		}<br/>
	}<br/><br/>
	
	function returnCar(){<br/>
		 $this->rentedCar->returnCar($this->rentedCar);<br/>
	}<br/><br/>
	
	function getMakeAndModel(){<br/>
		if (TRUE == $this->drivesCar){<br/>
			return 'I drive '.$this->rentedCar->getMakeAndModel().' really fast!';<br/>
		}else{<br/>
			return "I can't rent this car.";<br/>
		}<br/>
	}<br/>
}<br/>
	</h5>
	<hr/>
	<h5>
		$Customer_1 = new Customer();<br/>
		$Customer_2 = new Customer();<br/><br/>
		
		echo 'Customer_1 wants to rent the car;<br/>
		$Customer_1->rentCar();<br/>
		echo  'Customer_1 says: '.$Customer_1->getMakeAndModel();<br/>
		echo 'Customer_2 whants to rent the car;<br/>
		$Customer_2->rentCar();<br/>
		echo  'Customer_2 says: '.$Customer_2->getMakeAndModel();<br/>
		$Customer_1->returnCar();<br/>
		echo  'Customer_1 returned the car. ';<br/>
		echo 'Customer_2 whants to rent the car. Again;<br/>
		$Customer_2->rentCar();<br/>
		echo  'Customer_2 says: '.$Customer_2->getMakeAndModel();<br/>
		
	</h5>
	</div>
	</body>
</html>