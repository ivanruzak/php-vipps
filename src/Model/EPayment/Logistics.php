<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Logistics.
 *
 * @package Vipps\Model\EPayment
 */
class Logistics
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $dynamicOptionsCallback;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\LogisticsOption[]
     * @Serializer\Type("array<zaporylie\Vipps\Model\EPayment\LogisticsOption>")
     */
    protected $fixedOptions;

    /**
     * Gets dynamic options callback.
     *
     * @return string
     */
    public function getDynamicOptionsCallback(): string
    {
        return $this->dynamicOptionsCallback;
    }

    /**
     * Sets dynamic options callback.
     *
     * @param string $callback
     *
     * @return $this
     */
    public function setDynamicOptionsCallback(string $callback): Logistics
    {
        $this->dynamicOptionsCallback = $callback;
        return $this;
    }

    /**
     * Gets fixed logistic options.
     *
     * @return \zaporylie\Vipps\Model\EPayment\LogisticsOption[]
     */
    public function getFixedOptions(): array
    {
        return $this->fixedOptions;
    }

    /**
     * Sets fixed logistic options.
     *
     * @param \zaporylie\Vipps\Model\EPayment\LogisticsOption[] $options
     *
     * @return $this
     */
    public function setFixedOptions(array $options): Logistics
    {
        $this->fixedOptions = $options;
        return $this;
    }
}
