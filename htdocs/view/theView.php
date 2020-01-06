<?php
namespace Ylva\IPcontrol2;
require '../vendor/autoload.php';


# Initiate the objects
$theDataC = new DataController();

# Output to user
echo $theDataC->getData();

# Collect the IP and send to the controller
$ip = isset($_GET['ipNr']) ? $_GET['ipNr'] : null;

# Calls the controller for IP
if(isset($ip)) {
  echo "Controlling the ip <br/><br/>";

  $ipResult = $theDataC->ipCheck($ip);

  echo $ipResult;
}
