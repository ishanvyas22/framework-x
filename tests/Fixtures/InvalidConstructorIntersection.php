<?php

namespace FrameworkX\Tests\Fixtures;

/** PHP 8.1+ **/
class InvalidConstructorIntersection
{
    // @phpstan-ignore-next-line for PHP < 8
    #[PHP8] public function __construct(\Traversable&\ArrayAccess $value) { assert($value instanceof \Traversable && $value instanceof \ArrayAccess); }
}
