<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class IndustryData.
 *
 * @package Vipps\Model\EPayment
 */
class IndustryData
{

    /**
     * @var \zaporylie\Vipps\Model\EPayment\AirlineData
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\AirlineData")
     */
    protected $airline;

    /**
     * Gets airline data.
     *
     * @return \zaporylie\Vipps\Model\EPayment\AirlineData
     */
    public function getAirlineData(): AirlineData
    {
        return $this->airline;
    }
}
