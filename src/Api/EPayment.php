<?php

namespace zaporylie\Vipps\Api;

use zaporylie\Vipps\Model\EPayment\ResponseGetPayment;
use zaporylie\Vipps\Resource\EPayment\GetPayment;

/**
 * Class EPayment.
 *
 * @package Vipps\Api
 */
class EPayment extends ApiBase implements EPaymentInterface
{

    /**
     * {@inheritdoc}
     */
    public function getPayment(string $reference): ResponseGetPayment
    {
        $resource = new GetPayment(
            $this->app,
            $this->getSubscriptionKey(),
            $reference
        );
        $resource->setPath($resource->getPath());
        return $resource->call();
    }
}
