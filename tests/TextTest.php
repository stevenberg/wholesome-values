<?php

declare(strict_types=1);

/**
 * @author Steven Berg <steven@stevenberg.net>
 * @copyright 2017 Steven Berg
 * @license GNU General Public License, version 3
 */

namespace StevenBerg\WholesomeValues\Tests;

use PHPUnit\Framework\TestCase;
use StevenBerg\WholesomeValues\ExceptionalValue;
use StevenBerg\WholesomeValues\Text;

class TextTest extends TestCase
{
    public function testIsExceptional()
    {
        $text = Text::from('test');

        $this->assertFalse($text->isExceptional());
    }

    public function testValue()
    {
        $text = Text::from('test');

        $this->assertEquals('test', $text->value());
    }

    public function testNonStringValue()
    {
        $text = Text::from(1);

        $this->assertInstanceOf(ExceptionalValue::class, $text);
    }

    public function testEmptyStringValue()
    {
        $text = Text::From('');

        $this->assertInstanceOf(ExceptionalValue::class, $text);
    }
}
