<?php
include_once 'BookPrototype.php';

class PHPbookPrototype extends BookPrototype{
	
	function  __construct(){
		$this->topic = 'PHP';
	}
	
	function __clone(){}
}