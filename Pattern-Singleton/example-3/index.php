<?php 
 include_once('databaseSingleton.php');
 include_once('database.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<p><a href="http://code.tutsplus.com/tutorials/design-patterns-the-singleton-pattern--cms-23073">link</a></p>
<div> 

<h1>Design Patterns: The Singleton Pattern</h1>
<div id="ex-1">
<h3>DB connection withaut Singleton pattern</h3>

<?php 

$dbDetails = array(
		'db_name' => 'designpatterns',
		'db_host' => 'localhost',
		'db_user' => 'admin',
		'db_pass' => 'caos1313'
);

$db1 = new database($dbDetails);
$db2 = new database($dbDetails);
$db3 = new database($dbDetails);
$db4 = new database($dbDetails);


?>
<pre><?php var_dump($db1);?></pre>
<pre><?php var_dump($db2);?></pre>
<pre><?php var_dump($db3);?></pre>
<pre><?php var_dump($db4);?></pre>
</div>


<div id="ex-2">
<h3>DB connection with Singleton pattern</h3>
<?php
$dbDetails = array(
		'db_name' => 'designpatterns',
		'db_host' => 'localhost',
		'db_user' => 'admin',
		'db_pass' => 'caos1313'
);

$db1 = databaseSingleton::connect($dbDetails);
$db2 = databaseSingleton::connect($dbDetails);
$db3 = databaseSingleton::connect($dbDetails);
$db4 = databaseSingleton::connect($dbDetails);



?>

<pre><?php var_dump($db1);?></pre>
<pre><?php var_dump($db2);?></pre>
<pre><?php var_dump($db3);?></pre>
<pre><?php var_dump($db4);?></pre>
</div>
</div>
</body>
</html>
