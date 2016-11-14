<?php 
include_once 'BookPrototype.php';
include_once 'PHPbookPrototype.php';
include_once 'SQLbookPrototype.php';
?>

<html>

<head></head>

<body>
	
	<div>
		<?php 
		echo 'BEGIN TESTING PROTOTYPE PATTERN'.'<br/><br/>';
		
		
		$phpProto = new PHPbookPrototype();
		$sqlProto = new SQLbookPrototype();
		
		$book1 = clone $sqlProto;
		$book1->setTitle('SQL For Cats');
		echo 'Book topic'.$book1->getTopic().'<br/>';
		echo 'Book title'.$book1->getTitle().'<br/><br/>';
		
		$book2 = clone $phpProto;
		$book1->setTitle('OReilly Learning PHP 5');
		echo 'Book topic'.$book2->getTopic().'<br/>';
		echo 'Book title'.$book2->getTitle().'<br/><br/>';
		
		$book3 = clone  $sqlProto;
		$book3->setTitle('OReilly Learning SQL');
		echo 'Book topic'.$book3->getTopic().'<br/>';
		echo 'Book title'.$book3->getTitle().'<br/><br/>';
		
		
		?>
	</div>
</body>
</html>