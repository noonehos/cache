<?php
declare (strict_types = 1);
namespace memCrab\Cache;

abstract class Cache {
	abstract public function get(string $key);
	abstract public function set(string $key): void;
	abstract public function exists(string $key): bool;
}