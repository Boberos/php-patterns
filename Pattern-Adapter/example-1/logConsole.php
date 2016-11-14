<?php

class logConsloe{
	
	private $__errorObject;
	
	public function __construct($errorObject){
		$this->__errorObject= $errorObject;
	}
	
    public function write()
    {
        fwrite(STDERR,$this-> __errorObject->getError());
    }
}