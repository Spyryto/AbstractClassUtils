<?php

namespace AbstractClassUtils\StringWrapper\Test;

use AbstractClassUtils\StringWrapper\StringWrapper;

////////////////////////////////////////////////////////////////////////////////

describe (StringWrapper::class);

it ("can be created", function ()
{
	$wrapper = new StringTest('hello');

	expect($wrapper, isA(StringTest::class));
});

it ("returns the correct value", function ()
{
	$wrapper = new StringTest('hello');

	expect("$wrapper", is("hello"));
});

it ("throw if called with wrong types", function ()
{
	$wrongCall = function ()
	{
		$wrapperClass = StringTest::class;
		$wrapper = new $wrapperClass([]);
	};

	expect($wrongCall, throws());
});

it ("can validate passed value", function ()
{
	$wrongValueCall = function ()
	{
		$emptyString = new NonemptyStringTest('');
	};

	expect($wrongValueCall, throws());
});