<?php

namespace Ylva\IpControl2;

/**
 * The IP interface
 */
interface IPInterface
{


    /**
     * Initiats IP control object & controls IP
     *
     * @return void
     */
    public function controlIP($theIp);


    /**
     * Collects the IP data in JSON from ip API
     *
     * @return void
     */
    public function getIpData($theIp);

}
