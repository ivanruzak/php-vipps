<?php

namespace zaporylie\Vipps\Resource\EPayment;

class CapturePayment extends AdjustPaymentBase
{

    /**
     * @var string
     */
    protected $path = '/v1/payments/{id}/capture';
}
