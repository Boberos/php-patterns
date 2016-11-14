<?php
include_once 'CarPrototype.php';


class SubaruCarPrototype extends CarPrototype {
	
	function __construct(){
		$this->model = 'Subrau Outback';
		
	}
	
	function __clone(){}
}