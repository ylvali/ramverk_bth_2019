<?php
namespace Ylva\IPcontrol2;


/*
*
*  Class : DataView
*
#  Generates a view w data
*  Takes arguments with input for dynamic output
*
*/


class FormModel
{
    /**
     *
     * @var string $theData   The data to be displayed
     *
     */

    private $theData;


    /**
     *
     * Constructor to initiate the object
     *
     * @param string $checkIP : the IP for controlling
     */
    public function __construct($theIP)
    {

        $this->setData($theIP);

    }


    /**
     *
     * Creates a form with a certain IP adress as value
     *
     * @return void
     *
     */
    private function setData($anIP)
    {

      $form = "<form method=GET>
        IP:<br>
        <input type='text' name='ipNr' value=$anIP>
        <input type='submit' value='Check IP'>
      </form> ";

      $this->theData = $form;

    }


    /**
     *
     * Returns the ip on request
     *
     * @return string
     *
     */
    public function getData()
    {

      return $this->theData;

    }


}
