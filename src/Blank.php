<?php

declare(strict_types=1);

/**
 * @author Steven Berg <steven@stevenberg.net>
 * @copyright 2017 Steven Berg
 * @license MIT
 */

namespace StevenBerg\WholesomeValues;

class Blank implements Value
{
    public function __toString(): string
    {
        return $this->value();
    }

    public function isExceptional(): bool
    {
        return false;
    }

    public function value()
    {
        return '';
    }
}
