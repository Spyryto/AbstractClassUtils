<?php

namespace AbstractClassUtils\CheckMissingProperties;

use AbstractClassUtils\Error\MissingValues;

trait CheckMissingProperties
{
	static function checkMissingPropertiesIn(array $data)
	{
		$nullProperties = [];
		foreach ($data as $key => $value) {
			if ($value === null) {
				$nullProperties[] = $key;
			}
		}

		$optionalProperties =
			method_exists(static::class, '_optionalData_') ? call_user_func([static::class, '_optionalData_'])
			:                                                [];

		$missingProps = array_diff($nullProperties, $optionalProperties);

		if (count($missingProps) > 0) {
			$missing = join(', ', $missingProps);
			throw new MissingValues("Builder is missing field(s): $missing");
		}
	}
}