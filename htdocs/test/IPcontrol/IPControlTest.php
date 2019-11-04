<?php

namespace Ylva\IPcontrol;

use PHPUnit\Framework\TestCase;

/**
 *
 * Test cases for class IPcontroller
 *
 */
class IPControllerTest extends TestCase
{
    /**
     *
     * Construct object and verify that the object is as expected
     * Initiate object with correct and incorrect IP
     *
     */
    public function testCreateObject()
    {
      # Create IP objects with correct and incorrect IP

        $IPc2 = new IPcontrol("1.1.1.1");
        $this->assertInstanceOf("\Ylva\IPcontrol\IPcontrol", $IPc2);

        $IPc3 = new IPcontrol("113.133.17198");
        $this->assertInstanceOf("\Ylva\IPcontrol\IPcontrol", $IPc3);
    }


    /**
     *
     * Construct object and verify that the object is as expected
     * Test getting the result of the ip control in boolean
     *
     */
    public function testgetRes()
    {

        # Test getting the result in boolean

        $IPc = new IPcontrol("8.8.8.8");
        $this->assertInstanceOf("\Ylva\IPcontrol\IPcontrol", $IPc);

        # Test getting the result, assert that it is a boolean
        $res = $IPc->getResult();
        $isBool = is_bool($res);
        $this->assertTrue($isBool);
    }


    /**
     *
     * Construct object and verify that the object is as expected
     * Test getting the hostname
     *
     */
    public function testgetHostname()
    {

        # Test getting the result in boolean

        $IPc = new IPcontrol("8.8.8.8");
        $this->assertInstanceOf("\Ylva\IPcontrol\IPcontrol", $IPc);

        # Test getting the result, assert that it is a boolean
        $res = $IPc->getHostname();
        $isString = is_string($res);
        $this->assertTrue($isString);
    }


}
