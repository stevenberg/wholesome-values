<?php

declare(strict_types=1);

/**
 * @author Steven Berg <steven@stevenberg.net>
 * @copyright 2017 Steven Berg
 * @license MIT
 */

namespace StevenBerg\WholesomeValues;

class ExceptionalValue implements Value
{
    private $value;
    private $reason;

    public function __construct($value, string $reason)
    {
        $this->value = $value;
        $this->reason = $reason;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }

    public function isExceptional(): bool
    {
        return true;
    }

    public function value()
    {
        return $this->value;
    }

    public function reason(): string
    {
        return $this->reason;
    }
}
