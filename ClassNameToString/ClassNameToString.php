<?php

namespace AbstractClassUtils\ClassNameToString;

/** Conversion to string returns class name without namespace */

trait ClassNameToString
{
	/** Returns class name without namespace */

	function __toString ()
	{
		$class = get_class($this);
		$parts = explode('\\', $class);
		return array_pop($parts);
	}
}