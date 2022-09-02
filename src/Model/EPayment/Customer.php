<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Customer.
 *
 * @package Vipps\Model\EPayment
 */
class Customer
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $phoneNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $sub;

    /**
     * Gets customer phone number.
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Gets customer subscription identifier.
     *
     * @return string
     */
    public function getSub(): string
    {
        return $this->sub;
    }
}
