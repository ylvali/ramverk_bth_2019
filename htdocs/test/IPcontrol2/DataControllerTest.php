<?php

namespace Ylva\IPcontrol2;

use PHPUnit\Framework\TestCase;

/**
 *
 * Test cases for class DataController
 *
 */
class DataControllerTest extends TestCase
{
    /**
     *
     * Construct object and verify that the object is as expected
     * Test getting the correct IP
     *
     */

    public function testCreateObject()
    {
      # Create DataController object
        $DC = new DataController();
        $this->assertInstanceOf("\Ylva\IPcontrol2\DataController", $DC);

      # Get the form data and assert it is not null
        $theData = $DC->getData();

        $noIp = '0';
        $DC->ipCheck($noIp);

        $anIp = '8.8.8.8';
        $DC->ipCheck($anIp);
    }
}
