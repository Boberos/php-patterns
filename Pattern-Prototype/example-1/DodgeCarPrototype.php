<?php
include_once 'CarPrototype.php';


class DodgeCarPrototype extends CarPrototype{
	
	function __construct(){
		$this->model = 'Dodge Magnum';
	}
	function  __clone(){}
	
}