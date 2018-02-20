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
use StevenBerg\WholesomeValues\Text;

class TextTest extends TestCase
{
    protected function setUp()
    {
        $this->text = Text::from('test');
    }

    public function testIsExceptional()
    {
        $this->assertFalse($this->text->isExceptional());
    }

    public function testValue()
    {
        $this->assertEquals('test', $this->text->value());
    }

    public function testToString()
    {
        $this->assertEquals('test', (string) $this->text);
    }

    public function testFromNonStringValue()
    {
        $text = Text::from(1);

        $this->assertInstanceOf(ExceptionalValue::class, $text);
    }

    public function testFromEmptyStringValue()
    {
        $text = Text::from('');

        $this->assertInstanceOf(ExceptionalValue::class, $text);
    }

    public function testFromTextValue()
    {
        $this->assertEquals($this->text, Text::from($this->text));
    }
}
