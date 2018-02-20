<?php

declare(strict_types=1);

/**
 * @author Steven Berg <steven@stevenberg.net>
 * @copyright 2017 Steven Berg
 * @license MIT
 */

namespace StevenBerg\WholesomeValues;

interface Value
{
    public function __toString(): string;

    public function isExceptional(): bool;

    public function value();
}
