<?php 
include_once 'Book.php';
include_once 'BookTitleDecorator.php';
include_once 'BookTitleStarDecorator.php';
include_once 'BookTitleExclaimDecorator.php';
?>

<html>
	<head>
	
	</head>
	
	<body>
		<div>
			<?php
			$patternBook = new Book('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');
			
			$decorator = new BookTitleDecorator($patternBook);
			$starDecorator = new BookTitleStarDecorator($decorator);
			$exclaimDecorator = new BookTitleExclaimDecorator($decorator);
			
			echo 'showing title : ' ;echo '<br/>';
			echo $decorator->showTitle();echo '<br/>';echo '<br/>';
			
			echo 'showing title after two exclaims added : ';echo '<br/>';
			$exclaimDecorator->exclaimTitle();
			$exclaimDecorator->exclaimTitle();
			echo $decorator->showTitle();echo '<br/>';echo '<br/>';
			
			echo 'showing title after star added : ';echo '<br/>';
			$starDecorator->starTitle();
			echo $decorator->showTitle();echo '<br/>';echo '<br/>';
			
			echo 'showing title after reset: ';echo '<br/>';
			$decorator->resetTitle();
			echo $decorator->showTitle();echo '<br/>';
			
			?>
		</div>
	</body>
</html>