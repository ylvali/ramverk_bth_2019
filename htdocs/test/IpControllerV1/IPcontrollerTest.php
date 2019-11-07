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
     * Add a property and make sure that it is correct.
     *
     */
    public function testCreateObject()
    {
        $IPc = new IPcontroller();
        var_dump($IPc);
      #  $this->assertInstanceOf("\Ylva\IPcontrol\IPcontroller", $IPc);

        /*
        $aDice->setDiceNr(3);
        $res = $aDice->getDiceNr();
        $exp = 3;
        $this->assertEquals($exp, $res);
        */
    }


}
