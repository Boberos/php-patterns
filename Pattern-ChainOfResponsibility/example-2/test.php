<?php 
include_once 'SlowStore.php';
include_once 'InMemoryKeyValueStore.php';
include_once 'FrontEnd.php';

	$store = new SlowStore(array('pd' => 'Philip K. Dick',
			'ia' => 'Isaac Asimov',
			'ac' => 'Arthur C. Clarke',
			'hh' => 'Helmut Heißenbüttel'));
	// in development, we skip cache and pass $store directly to FrontEnd
	$cache = new InMemoryKeyValueStore($store);
	$frontEnd = new FrontEnd($cache);
	
	echo $frontEnd->get('ia'),"\n";
	echo $frontEnd->getEscaped('hh'),"\n";
	?>
