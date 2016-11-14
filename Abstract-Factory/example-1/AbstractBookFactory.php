<?php
/*
 * BookFactory classes
 */
abstract class AbstractBookFactory {
	abstract function makePHPBook();
	abstract function makeMySQLBook();
}