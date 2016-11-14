<?php 
 include_once 'Car.php';
 include_once 'CarDecorator.php';
 include_once 'AutomaticTransmissionDecorator.php';
 include_once 'GPSDecorator.php';
?>

<html>

<head></head>

<body>
	
	<div>
		<?php 
		$car = new Car();
		$decorator = new CarDecorator($car);
		$transmission = new AutomaticTransmissionDecorator($decorator);
		$gps = new GPSDecorator($decorator);
		
		echo 'Drive standard car: <br/>';
		echo $car->drive().'<br/>';
		$transmission->installAutomaticTransmission();
		$gps->installGPS();
		
		echo 'Driving full decorated car: <br/>';
		echo $decorator->drive().'<br/>';
		echo 'Driving the car without decoration:<br/>';
		echo $car->drive().'<br/>';
		
		?>
	</div>
</body>
</html>