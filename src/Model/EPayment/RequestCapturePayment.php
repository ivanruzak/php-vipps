<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RequestCapturePayment.
 *
 * @package Vipps\Model\EPayment
 */
class RequestCapturePayment
{
    /**
     * @var \zaporylie\Vipps\Model\EPayment\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\Amount")
     */
    protected $modificationAmount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $modificationReference;

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
    public function setModificationAmount(Amount $amount): RequestCapturePayment
    {
        $this->modificationAmount = $amount;
        return $this;
    }

    /**
     * Gets modification reference.
     *
     * @return string
     */
    public function getModificationReference(): string
    {
        return $this->modificationReference;
    }

    /**
     * Sets modification reference.
     *
     * @param string $reference
     *   Modification reference.
     *
     * @return $this
     */
    public function setModificationReference(string $reference): RequestCapturePayment
    {
        $this->modificationReference = $reference;
        return $this;
    }
}
