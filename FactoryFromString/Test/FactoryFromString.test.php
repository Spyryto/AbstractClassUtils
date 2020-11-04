<?php

namespace AbstractClassUtils\FactoryFromString\Test;

use AbstractClassUtils\FactoryFromString\FactoryFromString;

describe (FactoryFromString::class);

class FactoryFromStringTest
{
	use FactoryFromString;
}

it ("instantiates class enumerated from string", function ()
{
	$test1 = FactoryFromStringTest::fromString('Test1');

	expect($test1, isA(Test1::class));
});