<?php

namespace Ylva\IPcontrol2;

use PHPUnit\Framework\TestCase;

/**
 *
 * Test cases for class FormModel
 *
 */
class FormModelTest extends TestCase
{
    /**
     *
     * Construct object and verify that the object is as expected
     * Test getting the correct IP
     *
     */

    public function testCreateObject()
    {
      # Create DataView object
        $anIP = '8.8.8.8';
        $DW = new FormModel($anIP);
        $this->assertInstanceOf("\Ylva\IPcontrol2\FormModel", $DW);

        $theForm = $DW->getData();
    }
}
