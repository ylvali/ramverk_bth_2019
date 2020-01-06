<?php
namespace Ylva\IPcontrol2;


/*
*
*   Class : DataController
*
#   Generates data from the models to display in the view
*   Its responsibility is to provide the data requested of the models to the view.
*
*   According to SOLID principles, no concrete objects should be initiated
*   in the class, instead abstractions should be depended on
*
*   The abstraction FormInterface is depended on
*   The functionality it requires is 'createForm'
*   which is done with the model objects
*
*   The functionality is added as a trait.
*
*/


class DataController implements FormInterface, IPInterface
{

    use FormTrait;
    use IpTrait;

    /**
     *
     * Constructor to initiate the object
     *
     */
    public function __construct()
    {
    }


    /**
     *
     * Returns the form data on request
     *
     * @return string
     *
     */
    public function getData()
    {

      // Create the form
      $this->createForm();

      // Return the data
      return $this->theData;
    }


    /**
     *
     * Returns the IP result
     *
     * @return string
     *
     */
    public function ipCheck($anIp)
    {

      $res = $this->getIpData($anIp);

      if($res == true){
        $dataReturn = $this->stringData;
      } else {
        $dataReturn = "No ip found";
      }

      return $dataReturn;
    }


    /**
     *
     * Returns the IP result
     *
     * @return JSON obj
     *
     */
    public function ipCheckJSON($anIp)
    {

      $res = $this->getIpData($anIp);

      if($res == true){
        $dataReturn = $this->jsonData;
      } else {
        $dataReturn = "No ip found";
      }

      return $dataReturn;
    }
}
