<?php

namespace AbstractClassUtils\InstanceToArray;

trait InstanceToArray
{
	/** @return array<string,string> */
	function toArray()
	{
		$data = [];
		$fields = array_keys(get_class_vars(static::class));

		foreach ($fields as $field) {
			$data[$field] = $this->$field;
		}
		return $data;
	}
}