<?php
namespace Anax\IPcontrol;


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
# It operates with the php built in inet_pton
* https://www.php.net/manual/en/function.inet-pton.php
*
*/


/*
*
* Class for IpControl
*
*/

class IPcontrol
{
    /**
     *
     * @var string $suggestedIP   The current suggested IP controlled
     * @var boolean $isIP       Boolean about if currentNr is an IP or not
     *
     */

    private $suggestedIP;
    private $isIP;
    private $hostname = "";


    /**
     * Constructor to initiate the object
     *
     * @param string $checkIP : the IP for controlling
     */
    public function __construct($controlIP)
    {
        $this->suggestedIP = $controlIP;

        $this->controlIP($controlIP);

    }


    /**
     * Control the ip using inet_pton
     * Set hostname if exists
     *
     * @return void
     */
    private function controlIP($IPdata)
    {
        $ip_res = inet_pton($IPdata);

        if($ip_res === false) {
          $this->isIP = false;
        } else {
          $this->isIP = true;
          $this->hostname = gethostbyaddr($IPdata);
        }
    }


    /**
     * Get the result of the IP control
     *
     * @return boolean
     */
    public function getResult()
    {
      return $this->isIP;
    }


    /**
     * Get the hostname
     *
     * @return string
     */
    public function getHostname()
    {
      return $this->hostname;
    }



    /**
     * Get the result in JSON
     *
     * @return string
     */
    public function getJSONres()
    {

      $jsonRes = "
      {
        'IP': $this->suggestedIP;
        'isIP': $this->isIP;
        'hostname': $this->hostname;
      }
      ";
      return $jsonRes;
    }


}
