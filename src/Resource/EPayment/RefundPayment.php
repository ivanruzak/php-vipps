<?php

namespace zaporylie\Vipps\Resource\EPayment;

class RefundPayment extends AdjustPaymentBase
{

    /**
     * @var string
     */
    protected $path = '/v1/payments/{id}/refund';
}
