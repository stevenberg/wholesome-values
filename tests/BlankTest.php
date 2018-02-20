<?php

declare(strict_types=1);

/**
 * @author Steven Berg <steven@stevenberg.net>
 * @copyright 2017 Steven Berg
 * @license MIT
 */

namespace StevenBerg\WholesomeValues\Tests;

use PHPUnit\Framework\TestCase;
use StevenBerg\WholesomeValues\Blank;

class BlankTest extends TestCase
{
    protected function setUp()
    {
        $this->blank = new Blank;
    }

    public function testIsExceptional()
    {
        $this->assertFalse($this->blank->isExceptional());
    }

    public function testValue()
    {
        $this->assertEquals('', $this->blank->value());
    }

    public function testToString()
    {
        $this->assertEquals('', (string) $this->blank);
    }
}
