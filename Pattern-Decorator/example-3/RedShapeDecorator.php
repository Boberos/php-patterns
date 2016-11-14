<?php
include_once 'ShapeDecorator.php';

 class RedShapeDecorator extends ShapeDecorator {
 	protected $reddecoratedShape;
 	
	function __construct(Shape $decoratedShape) {
		$this->reddecoratedShape = $decoratedShape;
		
	}

	
	function  draw() {
		$this->reddecoratedShape->draw();
		$this->setRedBorder($this->reddecoratedShape);
	}

	private function setRedBorder(Shape $decoratedShape){
		echo "Border Color: Red";
	}
}