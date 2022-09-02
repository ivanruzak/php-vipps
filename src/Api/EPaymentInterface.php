<?php

namespace zaporylie\Vipps\Api;

use zaporylie\Vipps\Model\EPayment\ResponseGetPayment;

/**
 * Interface EPaymentInterface.
 *
 * @package Vipps\Api
 */
interface EPaymentInterface
{

    /**
     * Gets payment data.
     *
     * @param string $reference
     *   Given primary reference when creating the payment.
     *
     * @return \zaporylie\Vipps\Model\EPayment\ResponseGetPayment
     *
     * @see https://vippsas.github.io/vipps-epayment-api/index.html#tag/QueryPayments/operation/getPayment
     */
    public function getPayment(string $reference): ResponseGetPayment;
}
