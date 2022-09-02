<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AirlineData.
 *
 * @package Vipps\Model\EPayment
 */
class AirlineData
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $agencyInvoiceNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $airlineCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $airlineDesignatorCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $passengerName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $ticketNumber;

    /**
     * Gets agency invoice number.
     *
     * @return string
     */
    public function getAgencyInvoiceNumber(): string
    {
        return $this->agencyInvoiceNumber;
    }

    /**
     * Gets airline code.
     *
     * @return string
     */
    public function getAirlineCode(): string
    {
        return $this->airlineCode;
    }

    /**
     * Gets airline designator code.
     *
     * @return string
     */
    public function getAirlineDesignatorCode(): string
    {
        return $this->airlineDesignatorCode;
    }

    /**
     * Gets passenger name.
     *
     * @return string
     */
    public function getPassengerName(): string
    {
        return $this->passengerName;
    }

    /**
     * Gets ticket number.
     *
     * @return string
     */
    public function getTicketNumber(): string
    {
        return $this->ticketNumber;
    }
}
