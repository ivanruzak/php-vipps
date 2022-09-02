<?php

namespace zaporylie\Vipps\Resource\EPayment;

class CancelPayment extends AdjustPaymentBase
{

    /**
     * @var string
     */
    protected $path = '/v1/payments/{id}/cancel';
}
