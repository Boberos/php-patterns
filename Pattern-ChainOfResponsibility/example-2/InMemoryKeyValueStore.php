<?php
include_once 'KeyValueStore.php';

/**
 * A ConcreteHandler that handles the request for a key by looking for it in
 * its own cache. Forwards to the next handler in case of cache miss.
 */
class InMemoryKeyValueStore implements KeyValueStore
{
	protected $_nextHandler;
	protected $_cached = array();

	public function __construct(KeyValueStore $nextHandler)
	{
		$this->_nextHandler = $nextHandler;
	}

	protected function _load($key)
	{
		if (!isset($this->_cached[$key])) {
			$this->_cached[$key] = $this->_nextHandler->get($key);
		}
	}

	public function get($key)
	{
		$this->_load($key);
		return $this->_cached[$key];
	}
}