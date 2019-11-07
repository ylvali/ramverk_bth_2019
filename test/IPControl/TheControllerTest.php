<?php

namespace Anax\IPcontrol;

use PHPUnit\Framework\TestCase;

/**
 *
 * Test cases for class IPcontroller
 *
 */
class TheControllerTest extends TestCase
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

        $controller = new TheController();
        $this->assertInstanceOf("\Anax\IPcontrol\TheController", $controller);

    }
}
