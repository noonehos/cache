<?php
declare (strict_types = 1);
namespace memCrab\Cache;

abstract class FileCache {
	abstract public function key(string $filePath): string;
	abstract public function get(string $key);
	abstract public function set(string $key): void;
	abstract public function exists(string $key): bool;
}