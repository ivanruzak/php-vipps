<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PaymentMethod.
 *
 * @package Vipps\Model\EPayment
 */
class PaymentMethod
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $type;

    /**
     * Gets payment method type, can be "WALLET" or "CARD".
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
