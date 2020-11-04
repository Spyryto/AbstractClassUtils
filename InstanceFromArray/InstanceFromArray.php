<?php

namespace AbstractClassUtils\InstanceFromArray;

trait InstanceFromArray
{
	protected static function fromArray(array $data)
	{
		$newInstance = new static;
		$newInstance->fillFromArray($data);
		return $newInstance;
	}

	protected function fillFromArray(array $data)
	{
		$classFields = array_keys(get_class_vars(static::class));

		foreach ($classFields as $name) {
			if (array_key_exists($name, $data)) {
				$this->$name = $data[$name];
			}
		}

		return $this;
	}
}