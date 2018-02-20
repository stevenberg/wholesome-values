<?php

declare(strict_types=1);

/**
 * @author Steven Berg <steven@stevenberg.net>
 * @copyright 2017 Steven Berg
 * @license MIT
 */

namespace StevenBerg\WholesomeValues\Tests;

use PHPUnit\Framework\TestCase;
use StevenBerg\WholesomeValues\ExceptionalValue;

class ExceptionalValueTest extends TestCase
{
    protected function setUp()
    {
        $this->value = new ExceptionalValue('test', 'must not be test');
    }

    public function testIsExceptional()
    {
        $this->assertTrue($this->value->isExceptional());
    }

    public function testValue()
    {
        $this->assertEquals('test', $this->value->value());
    }

    public function testToString()
    {
        $this->assertEquals('test', (string) $this->value);
    }

    public function testInvalidReason()
    {
        $this->assertEquals('must not be test', $this->value->reason());
    }
}
