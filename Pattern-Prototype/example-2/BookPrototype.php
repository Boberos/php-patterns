<?php
abstract class BookPrototype {
	
	
	protected $title;
	protected $topic;
	
	function __clone(){}
	
	function getTopic(){
		return $this->topic;
	}
	
	function getTitle(){
		return $this->title;
	}
	
	function setTitle($param){
		$this->title = $param;
	}
	
}