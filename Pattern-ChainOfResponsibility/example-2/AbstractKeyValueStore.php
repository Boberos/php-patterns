<?php
include_once 'KeyValueStore.php';

/**
 * Basic no-op implementation which ConcreteHandlers not interested in
 * caching or in interfering with the retrieval inherit from.
 */
abstract class AbstractKeyValueStore implements KeyValueStore
{
	protected $_nextHandler;

	public function get($key)
	{
		return $this->_nextHandler->get($key);
	}
}