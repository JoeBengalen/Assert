<?php

/**
 * JoeBengalen Assert library.
 *
 * @author    Martijn Wennink <joebengalen@gmail.com>
 * @copyright Copyright (c) 2015-2016 Martijn Wennink
 * @link      https://github.com/JoeBengalen/Assert
 * @license   MIT
 */

namespace JoeBengalen\Assert\Test;

use DateTime;
use JoeBengalen\Assert\Helper;
use PHPUnit_Framework_TestCase;
use stdClass;

/**
 * @coversDefaultClass JoeBengalen\Assert\Helper
 */
class HelperTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::typeToString
     */
    public function testCanGetTypeOfNullAsString()
    {
        $this->assertSame('null', Helper::typeToString(null));
    }

    /**
     * @covers ::typeToString
     */
    public function testCanGetTypeOfBooleansAsString()
    {
        $this->assertSame('boolean', Helper::typeToString(true));
        $this->assertSame('boolean', Helper::typeToString(false));
    }

    /**
     * @covers ::typeToString
     */
    public function testCanGetTypeOfStringAsString()
    {
        $this->assertSame('string', Helper::typeToString(''));
        $this->assertSame('string', Helper::typeToString('null'));
        $this->assertSame('string', Helper::typeToString('something test'));
    }

    /**
     * @covers ::typeToString
     */
    public function testCanGetTypeOfIntegerAsString()
    {
        $this->assertSame('integer', Helper::typeToString(1));
        $this->assertSame('integer', Helper::typeToString(34593487));
        $this->assertSame('integer', Helper::typeToString(-999));
        $this->assertSame('integer', Helper::typeToString(0));
    }

    /**
     * @covers ::typeToString
     */
    public function testCanGetTypeOfDoubleAsString()
    {
        $this->assertSame('double', Helper::typeToString(1.2));
        $this->assertSame('double', Helper::typeToString(-0.33));
    }

    /**
     * @covers ::typeToString
     */
    public function testCanGetTypeOfArrayAsString()
    {
        $this->assertSame('array', Helper::typeToString([]));
        $this->assertSame('array', Helper::typeToString([true]));
    }

    /**
     * @covers ::typeToString
     */
    public function testCanGetTypeOfObjectAsString()
    {
        $this->assertSame('stdClass', Helper::typeToString(new stdClass()));
        $this->assertSame('DateTime', Helper::typeToString(new DateTime()));
        $this->assertSame(__CLASS__, Helper::typeToString($this));
    }

    /**
     * @covers ::typeToString
     */
    public function testCanGetTypeOfResourceAsString()
    {
        $this->assertSame('resource', Helper::typeToString(fopen('php://temp', 'r')));
    }

    /**
     * @covers ::valueToString
     */
    public function testCanGetValueOfNullAsString()
    {
        $this->assertSame('null', Helper::valueToString(null));
    }

    /**
     * @covers ::valueToString
     */
    public function testCanGetValueOfBooleansAsString()
    {
        $this->assertSame('true', Helper::valueToString(true));
        $this->assertSame('false', Helper::valueToString(false));
    }

    /**
     * @covers ::valueToString
     */
    public function testCanGetValueOfStringAsString()
    {
        $this->assertSame('""', Helper::valueToString(''));
        $this->assertSame('"null"', Helper::valueToString('null'));
        $this->assertSame('"something test"', Helper::valueToString('something test'));
    }

    /**
     * @covers ::valueToString
     */
    public function testCanGetValueOfIntegerAsString()
    {
        $this->assertSame('1', Helper::valueToString(1));
        $this->assertSame('34593487', Helper::valueToString(34593487));
        $this->assertSame('-999', Helper::valueToString(-999));
        $this->assertSame('0', Helper::valueToString(0));
    }

    /**
     * @covers ::valueToString
     */
    public function testCanGetValueOfDoubleAsString()
    {
        $this->assertSame('1.2', Helper::valueToString(1.2));
        $this->assertSame('-0.33', Helper::valueToString(-0.33));
    }

    /**
     * @covers ::valueToString
     */
    public function testCanGetValueOfArrayAsString()
    {
        $this->assertSame('array(0)', Helper::valueToString([]));
        $this->assertSame('array(3)', Helper::valueToString([1, 2, 3]));
    }

    /**
     * @covers ::valueToString
     */
    public function testCanGetValueOfObjectAsString()
    {
        $this->assertSame('stdClass', Helper::valueToString(new stdClass()));
        $this->assertSame('DateTime', Helper::valueToString(new DateTime()));
        $this->assertSame(__CLASS__, Helper::valueToString($this));
    }

    /**
     * @covers ::valueToString
     */
    public function testCanGetValueOfResourceAsString()
    {
        $this->assertSame('resource', Helper::valueToString(fopen('php://temp', 'r')));
    }
}
