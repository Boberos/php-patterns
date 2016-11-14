<?php 
include_once 'CarPrototype.php';
include_once 'DodgeCarprototype.php';
include_once 'SubaruCarPrototype.php';
?>

<html>

<head></head>

<body>
	
	<div>
		<?php 
			$dodgeProto = new DodgeCarPrototype();
			$subaruProto = new SubaruCarPrototype();
			
			echo ' which car you whant ? <br/>';
			$customerDecision = 'Subaru';
			
			if($customerDecision == 'Subaru'){
				$customerCar = clone $subaruProto;
			}else{
				$customerCar = clone $dodgeProto;
			}
			
			echo $customerCar->getModel().'<br/>';
			echo 'which color you prefer ? Red or ReD ;) <br/>';
			$customerCar->setColor('red');/**/
			echo 'fine, we will paint your '.$customerCar->getModel().' '.$customerCar->getColor().'<br/>';
		?>
	</div>
</body>
</html>