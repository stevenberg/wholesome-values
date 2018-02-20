<?php

declare(strict_types=1);

/**
 * @author Steven Berg <steven@stevenberg.net>
 * @copyright 2017 Steven Berg
 * @license MIT
 */

namespace StevenBerg\WholesomeValues;

abstract class Base implements Value
{
    protected $value;

    protected static $values = [];

    protected function __construct($value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }

    public function isExceptional(): bool
    {
        return false;
    }

    public function value()
    {
        return $this->value;
    }

    public static function from($value): Value
    {
        if (is_a($value, static::class)) {
            return $value;
        } elseif (static::validate($value)) {
            return static::get($value);
        }

        return new ExceptionalValue($value, static::invalidReason());
    }

    public static function get($value): self
    {
        if (!isset(static::$values[static::class])) {
            static::$values[static::class] = [];
        }

        if (!isset(static::$values[static::class][$value])) {
            static::$values[static::class][$value] = new static($value);
        }

        return static::$values[static::class][$value];
    }

    abstract protected static function validate($value): bool;

    abstract protected static function invalidReason(): string;
}
