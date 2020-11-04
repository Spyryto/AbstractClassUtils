<?php

namespace AbstractClassUtils\StringWrapper;

trait StringWrapper
{
	private $value;

	function __construct(string $value)
	{
		$this->value = $value;
		if (method_exists(static::class, 'validate')) {
			call_user_func([static::class, 'validate']);
		}
	}

	function __toString()
	{
		return $this->value;
	}
}