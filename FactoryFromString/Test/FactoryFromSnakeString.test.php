<?php

namespace AbstractClassUtils\FactoryFromString\Test;

use AbstractClassUtils\FactoryFromString\FactoryFromSnakeString;

describe (FactoryFromSnakeString::class);

class FactoryFromSnakeStringTest
{
	use FactoryFromSnakeString;
}

it ("instantiates class enumerated from string", function ()
{
	$test1 = FactoryFromSnakeStringTest::fromString('Test1');

	expect($test1, isA(Test1::class));
});

it ("instantiates from snake-case string", function ()
{
	$test1 = FactoryFromSnakeStringTest::fromString('Test_1');

	expect($test1, isA(Test1::class));
});

it ("instantiates from uppercase snake-case string", function ()
{
	$test1 = FactoryFromSnakeStringTest::fromString('TEST_1');

	expect($test1, isA(Test1::class));
});

it ("instantiates from snake-case string wrapped in underscores", function ()
{
	$test1 = FactoryFromSnakeStringTest::fromString('_TEST_1_');

	expect($test1, isA(Test1::class));
});