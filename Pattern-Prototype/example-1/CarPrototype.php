<?php
abstract class CarPrototype{
	
	protected $model;
	protected $color;
	
	abstract function __clone();
	
	function getModel(){
		Return $this->model;
	}
	function getColor(){
		return $this->color;
	}
	function setModel($param){
		$this->model = $param;
	}
	function setColor($param){
		$this->color = $param;
	}
	
}