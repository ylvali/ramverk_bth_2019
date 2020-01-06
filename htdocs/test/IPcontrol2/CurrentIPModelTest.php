<?php

namespace Ylva\IPcontrol2;

use PHPUnit\Framework\TestCase;

/**
 *
 * Test cases for class CurrentIPMOdel
 *
 */
class CurrentIPModelTest extends TestCase
{
    /**
     *
     * Construct object and verify that the object is as expected
     * Test getting the correct IP
     *
     */
    public function testCreateObject()
    {
      # Create IP objects with correct and incorrect IP
        $CIM = new CurrentIPModel();
        $this->assertInstanceOf("\Ylva\IPcontrol2\CurrentIPModel", $CIM);

        $currentIP = $CIM->getIP();
    }
}
