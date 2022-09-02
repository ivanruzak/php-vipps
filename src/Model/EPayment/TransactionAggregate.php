<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class TransactionAggregate.
 *
 * @package Vipps\Model\EPayment
 */
class TransactionAggregate
{

    /**
     * @var \zaporylie\Vipps\Model\EPayment\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\Amount")
     */
    protected $cancelledAmount;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\Amount")
     */
    protected $capturedAmount;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\Amount")
     */
    protected $refundedAmount;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\Amount")
     */
    protected $authorizedAmount;

    /**
     * Gets payment transaction aggregate cancelled amount.
     *
     * @return \zaporylie\Vipps\Model\EPayment\Amount
     */
    public function getCancelledAmount(): Amount
    {
        return $this->cancelledAmount;
    }

    /**
     * Gets payment transaction aggregate captured amount.
     *
     * @return \zaporylie\Vipps\Model\EPayment\Amount
     */
    public function getCapturedAmount(): Amount
    {
        return $this->capturedAmount;
    }

    /**
     * Gets payment transaction aggregate refunded amount.
     *
     * @return \zaporylie\Vipps\Model\EPayment\Amount
     */
    public function getRefundedAmount(): Amount
    {
        return $this->refundedAmount;
    }

    /**
     * Gets payment transaction aggregate authorized amount.
     *
     * @return \zaporylie\Vipps\Model\EPayment\Amount
     */
    public function getAuthorizedAmount(): Amount
    {
        return $this->authorizedAmount;
    }
}
