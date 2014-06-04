<?php

namespace Ticketpark\PingenBundle\Pingen;

use Pingen\Pingen as PingenLibrary;

class Pingen
{
    /**
     * Constructor
     *
     * @param string $token Pingen API access token
     */
    public function __construct($token, $staging=false)
    {
        if ($staging) {
            $mode = PingenLibrary::MODE_STAGING;
        } else {
            $mode = PingenLibrary::MODE_PRODUCTION;
        }

        $this->pingen = new PingenLibrary($token, $mode);
    }

    /**
     * Get the pingen object
     *
     * @return PingenLibrary
     */
    public function get()
    {
        return $this->pingen;
    }
}