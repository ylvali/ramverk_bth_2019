<?php
namespace Ylva\IPcontrol2;


/*
*  Class : CurrentIPModel
*
#  Controls the current IP of webpage visitor
*
*/


class CurrentIPModel
{
    /**
     *
     * @var string $userIP   The current user IP
     *
     */

    private $userIP;


    /**
     * Constructor to initiate the object
     *
     * @param string $checkIP : the IP for controlling
     */
    public function __construct()
    {

        $this->controlIP();

    }


    /**
     * Control the ip & set it to the property
     *
     * @return void
     */
    private function controlIP()
    {

      $theIp = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
      /*
          if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
          $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
          $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        elseif(!empty($_SERVER['REMOTE_ADDR']))
        {
          $ip=$_SERVER['REMOTE_ADDR'];
        } else {
          $ip = null;
        }
        */
        $this->userIP = $theIp;
    }


    /**
     * Get ip the ip
     *
     * @return string
     */
    public function getIP()
    {

      return $this->userIP;

    }


}
