<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RequestCapturePayment.
 *
 * @package Vipps\Model\EPayment
 */
class RequestCapturePayment extends RequestCancelPayment
{
    /**
     * @var \zaporylie\Vipps\Model\EPayment\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\Amount")
     */
    protected $modificationAmount;

    /**
     * Gets modification amount.
     *
     * @return \zaporylie\Vipps\Model\EPayment\Amount
     */
    public function getModificationAmount(): Amount
    {
        return $this->modificationAmount;
    }

    /**
     * Sets modification amount.
     *
     * @param \zaporylie\Vipps\Model\EPayment\Amount $amount
     *   Amount.
     *
     * @return $this
     */
    public function setModificationAmount(Amount $amount)
    {
        $this->modificationAmount = $amount;
        return $this;
    }
}
