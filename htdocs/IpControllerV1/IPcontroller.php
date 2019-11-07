<?php
namespace Ylva\IPcontrol;


/*
*  Class : IpController
*
# IPV6 & IPV4

# IPv4
# 1-8 digits
# 4 groups
# Seperated by punctuation dots

# IPv6
# 8 groups
# 4 hexadecimal digits (both nrs and letters allowed)

# This class should test if the input argument is of IPv4 or IPv6 standard
# The initiated object can be used multiple times.
# The current ip controlled is saved in a property
# A method controls it and saves the result to a property
*
*/


/*
*
* Class for IpControl
*
*/

class IPcontroller
{
    /**
     *
     * @var string $suggestedIP   The current suggested IP controlled
     * @var boolean $isIP       Boolean about if currentNr is an IP or not
     *
     */

    private $suggestedIP;
    private $isIP;


    /**
     * Constructor to initiate the object
     * Optional suggested IP for controlling
     *
     * @param int $number The current dice face
     *            None given will generate a random nr
     */
    public function __construct(int $IPsuggestion = null)
    {
        $this->suggestedIP = $IPsuggestion;

        if ($IPsuggestion != null) {
            #$this->random();
            echo "IP given"
        }
    }


    /**
     * Check IP part1
     *
     * @return void
     */
    private function checkIP1()
    {
        #$this->number = rand(1, 6);
    }

}
