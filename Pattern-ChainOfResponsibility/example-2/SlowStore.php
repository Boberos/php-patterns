<?php
include_once 'KeyValueStore.php';

/**
 * Ideally the last ConcreteHandler in the chain. At least, if inserted in
 * a Chain it will be the last node to be called.
 */
class SlowStore implements KeyValueStore
{
	/**
	 * This could be a somewhat slow store: a database or a flat file.
	 */
	protected $_values;

	public function __construct(array $values = array())
	{
		$this->_values = $values;
	}

	public function get($key)
	{
		return $this->_values[$key];
	}
}