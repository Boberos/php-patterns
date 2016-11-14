<?php
include_once 'BookPrototype.php';

class SQLbookPrototype extends BookPrototype{
	
	function __construct(){
		$this->topic = 'SQL';
	}
	
	function  __clone(){}
}