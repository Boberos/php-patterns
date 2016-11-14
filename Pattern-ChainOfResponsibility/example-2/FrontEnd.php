<?php
include_once 'AbstractKeyValueStore.php';

class FrontEnd extends AbstractKeyValueStore
{
	public function __construct(KeyValueStore $nextHandler)
	{
		$this->_nextHandler = $nextHandler;
	}

	public function getEscaped($key)
	{
		return htmlentities($this->get($key), ENT_NOQUOTES, 'UTF-8');
	}
}