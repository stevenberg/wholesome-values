<?php

declare(strict_types=1);

/**
 * @author Steven Berg <steven@stevenberg.net>
 * @copyright 2017 Steven Berg
 * @license GNU General Public License, version 3
 */

namespace StevenBerg\WholesomeValues;

abstract class Base implements Value
{
    abstract protected static function validate($value): bool;

    abstract protected static function invalidReason(): string;

    protected $value;

    protected function __construct($value)
    {
        $this->value = $value;
    }

    public function isExceptional(): bool
    {
        return false;
    }

    public function value()
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }

    protected static $values = [];

    public static function from($value): Value
    {
        if (!is_a($value, static::class) && !static::validate($value)) {
            return new ExceptionalValue($value, static::invalidReason());
        }

        return static::get($value);
    }

    public static function get($value): Base
    {
        if (!isset(static::$values[static::class])) {
            static::$values[static::class] = [];
        }

        if (!isset(static::$values[static::class][$value])) {
            static::$values[static::class][$value] = new static($value);
        }

        return static::$values[static::class][$value];
    }
}
