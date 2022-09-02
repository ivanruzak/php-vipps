<?php

namespace zaporylie\Vipps\Api;

use zaporylie\Vipps\Model\EPayment\AdjustPaymentResponse;
use zaporylie\Vipps\Model\EPayment\Amount;
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

    /**
     * Cancels payment.
     *
     * @param string $reference
     *   Given primary reference when creating the payment.
     * @param string $modification_reference
     *   Modification reference.
     *
     * @return \zaporylie\Vipps\Model\EPayment\AdjustPaymentResponse
     *
     * @see https://vippsas.github.io/vipps-epayment-api/index.html#tag/AdjustPayments/operation/cancelPayment
     */
    public function cancelPayment(string $reference, string $modification_reference = ''): AdjustPaymentResponse;

    /**
     * Captures payment.
     *
     * @param string $reference
     *   Given primary reference when creating the payment.
     * @param \zaporylie\Vipps\Model\EPayment\Amount $modification_amount
     *   Modification amount.
     * @param string $modification_reference
     *   Modification reference.
     *
     * @return \zaporylie\Vipps\Model\EPayment\AdjustPaymentResponse
     *
     * @see https://vippsas.github.io/vipps-epayment-api/index.html#tag/AdjustPayments/operation/capturePayment
     */
    public function capturePayment(string $reference, Amount $modification_amount, string $modification_reference = ''): AdjustPaymentResponse;

    /**
     * Refunds payment.
     *
     * @param string $reference
     *   Given primary reference when creating the payment.
     * @param \zaporylie\Vipps\Model\EPayment\Amount $modification_amount
     *   Modification amount.
     * @param string $modification_reference
     *   Modification reference.
     *
     * @return \zaporylie\Vipps\Model\EPayment\AdjustPaymentResponse
     *
     * @see https://vippsas.github.io/vipps-epayment-api/index.html#tag/AdjustPayments/operation/refundPayment
     */
    public function refundPayment(string $reference, Amount $modification_amount, string $modification_reference = ''): AdjustPaymentResponse;
}
