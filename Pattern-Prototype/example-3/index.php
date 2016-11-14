<?php 
include_once 'SubObject.php';
include_once 'MyClonable.php';
?>

<html>

<head></head>

<body>
	<div> <p><a href="https://wwphp-fb.github.io/faq/object-oriented-programming/design-patterns/prototype/">link</a></p></div>
	<div>
		<?php 
		
			$obj = new MyClonable();
			
			$obj->object1 = new SubObject();
			$obj->object2 = new SubObject();
			
			$obj2 = clone $obj;
			$obj3 = clone $obj;
			$obj4 = clone $obj3;
			
			print("Original Object:\n");?>
			<pre><?php print_r($obj);?></pre>
			
			<?php print("Cloned Object:\n");?>
			<pre><?php print_r($obj2);?></pre>
			
			<?php print("Cloned Object:\n");?>
			<pre><?php print_r($obj3);?></pre>
			
			<?php print("Cloned Object:\n");?>
			<pre><?php print_r($obj4);?></pre>
	
	</div>
</body>
</html>