<?php
declare (strict_types = 1);
namespace memCrab\Cache;

abstract class FileCache implements Cache {
	abstract public function fileKey(string $filePath): string;
	abstract public function get(string $key);
	abstract public function set(string $key): void;
	abstract public function exists(string $key): bool;
}