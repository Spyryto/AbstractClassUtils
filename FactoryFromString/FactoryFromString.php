<?php

namespace AbstractClassUtils\FactoryFromString;

trait FactoryFromString
{
	static function fromString(string $className)
	{
		$path = explode("\\", get_called_class());
		$namespace = join("\\", array_slice($path, 0, -1));
		$class = "$namespace\\$className";
		return new $class;
	}
}