<?php

namespace Ylva\IPcontrol2;

/**
 * A trait for creating a form
 */
trait FormTrait
{
    /**
     * @var string The form data
     */
    private $theData;



    /**
     * Create the form with a correct IP
     *
     * @return void
     */
    public function createForm()
    {
        $currentIP = new CurrentIpModel();
        $form = new FormModel($currentIP->getIP());

        $this->theData = $form->getData();
    }
}
