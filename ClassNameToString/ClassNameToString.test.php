<?php

namespace AbstractClassUtils\ClassNameToString;

use AbstractClassUtils\ClassNameToString\Test\John;

describe (ClassNameToString::class);

it ("returns class name when converted to string", function ()
{
	$john = new John;
	expect("$john", is('John'));
});
