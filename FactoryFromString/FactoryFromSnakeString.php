<?php

namespace AbstractClassUtils\FactoryFromString;

use Stringy\Stringy;

trait FactoryFromSnakeString
{
	static function fromString(string $name)
	{
		$path = explode("\\", get_called_class());
		$namespace = join("\\", array_slice($path, 0, -1));

		$className = Stringy::create($name)
			->replace('_', '');

		$class = "$namespace\\$className";
		return new $class;
	}
}