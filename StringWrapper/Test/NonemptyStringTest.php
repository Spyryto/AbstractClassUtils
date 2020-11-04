<?php

namespace AbstractClassUtils\StringWrapper\Test;

use AbstractClassUtils\StringWrapper\StringWrapper;
use TypeError;

////////////////////////////////////////////////////////////////////////////////

class NonemptyStringTest
{
	use StringWrapper;

	function validate()
	{
		if ($this->value == '') {
			throw new TypeError('String cannot be empty');
		}
	}
}