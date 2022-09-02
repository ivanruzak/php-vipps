<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Amount.
 *
 * @package Vipps\Model\EPayment
 */
class Amount
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $currency;

    /**
     * @var float
     * @Serializer\Type("double")
     */
    protected $value;

    /**
     * Gets amount currency.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets amount currency.
     *
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency(string $currency): Amount
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets amount value.
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Sets amount value.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setValue(string $value): Amount
    {
        $this->value = $value;
        return $this;
    }
}
