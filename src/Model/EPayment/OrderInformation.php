<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrderInformation.
 *
 * @package Vipps\Model\EPayment
 */
class OrderInformation
{

    /**
     * @var \zaporylie\Vipps\Model\EPayment\OrderLineItem[]
     * @Serializer\Type("array<zaporylie\Vipps\Model\EPayment\OrderLineItem>")
     */
    protected $lineItems;

    /**
     * @var integer|null
     * @Serializer\Type("integer")
     */
    protected $shippingAmount;

    /**
     * Gets order line items.
     *
     * @return \zaporylie\Vipps\Model\EPayment\OrderLineItem[]
     */
    public function getLineItems(): array
    {
        return $this->lineItems;
    }

    /**
     * Gets shipping amount.
     *
     * @return int|null
     */
    public function getShippingAmount(): ?int
    {
        return $this->shippingAmount;
    }
}
