<?php

namespace Ylva\IPcontrol2;

/**
 * A trait for handling IP control
 */
trait IpTrait
{
    /**
     * @var string $currentIp saves the current IP
     * @var string $isIp saves in boolean if IP is correct or not
     * @var string $jsonData provides json data of ip
     * @var string $stringData provides string data of ip
     */
    private $currentIp;
    private $isIp;
    private $jsonData;
    private $stringData;



    /**
     * Controls the current IP using specific IP control object
     *
     * @return void
     */
    public function controlIP($theIp)
    {
        // Save current IP
        $this->currentIp = $theIp;

        // Initiate a new IP object
        $ipControl = new IPcontrol($theIp);

        // Save result of the IP control
        $this->isIp = $ipControl->getResult();
    }


    /**
     * Checks the IP from specific online ip API
     *
     * @return boolean : true if IP is correct and data loaded into object
     */
    public function getIpData($theIp)
    {

        // Control the ip
        $this->controlIP($theIp);

        // Collect the details from the API
        if($this->isIp == true) {
          $ipDetails = file_get_contents("http://api.ipstack.com/".$theIp."?access_key=b4a082578df756033d0c1f91ae02b78e");

          // Save the JSON respons to trait
          $this->jsonData = $ipDetails;

          // decode JSON and save response
          $ipData = json_decode($ipDetails, true);
          $string = "IP: ".$ipData['ip']."<br/>";
          $string .= "Type: ".$ipData['type']."<br/>";
          $string .= "Country: ".$ipData['country_name']."<br/>";
          $string .= "City: ".$ipData['city']."<br/>";

          $this->stringData = $string;

          $respons = true;
        } else {
          $respons = false;
        }

        return $respons;
    }
}
