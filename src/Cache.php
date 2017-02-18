<?php
declare (strict_types = 1);
namespace memCrab\Cache;

interface Cache {
	public function get(string $key);
	public function set(string $key): void;
	public function exists(string $key): bool;
}