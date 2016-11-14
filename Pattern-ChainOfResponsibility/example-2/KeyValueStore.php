<?php
/**
 * The Handler abstraction. Objects that want to be a part of the
 * ChainOfResponsibility must implement this interface directly or via
 * inheritance from an AbstractHandler.
 */
interface KeyValueStore
{
    /**
     * Obtain a value.
     * @param string $key
     * @return mixed
     */
    public function get($key);
}