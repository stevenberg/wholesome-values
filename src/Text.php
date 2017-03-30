<?php

declare(strict_types=1);

/**
 * @author Steven Berg <steven@stevenberg.net>
 * @copyright 2017 Steven Berg
 * @license GNU General Public License, version 3
 */

namespace StevenBerg\WholesomeValues;

class Text extends Base
{
    protected static function validate($value): bool
    {
        return is_string($value) && strlen($value) > 0;
    }

    protected static function invalidReason(): string
    {
        return 'must be a string of length > 0';
    }
}
