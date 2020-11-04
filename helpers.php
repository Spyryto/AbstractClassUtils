<?php

namespace AbstractClassUtils;


/////[   Helper functions   ]///////////////////////////////////////////////////


/** Returns class name of object, without namespace */

function className(object $object)
{
	$class = get_class($object);
	return name($class);
}


/** Returns name of class, without namespace
 * @return string
 */

function name(string $class)
{
	/** @var string[] */
	$parts = explode('\\', $class);
	return array_pop($parts);
}


/** Loads all PHP scripts in the specified directory */

function loadAvailableScripts(string $directory)
{
	if ( ! is_dir($directory)) {
		throw new \InvalidArgumentException("Directory $directory does not exist");
	}

	$files = glob($directory . "/*.php");

	foreach ($files as $file) {
		include_once $file;
	}
}


/////[   Autoloader hook   ]////////////////////////////////////////////////////

class helpers { const load = true; }