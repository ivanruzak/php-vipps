<?php

namespace zaporylie\Vipps\Api;

use zaporylie\Vipps\Model\EPayment\AdjustPaymentResponse;
use zaporylie\Vipps\Model\EPayment\Amount;
use zaporylie\Vipps\Model\EPayment\RequestCancelPayment;
use zaporylie\Vipps\Model\EPayment\RequestCapturePayment;
use zaporylie\Vipps\Model\EPayment\RequestRefundPayment;
use zaporylie\Vipps\Model\EPayment\ResponseGetPayment;
use zaporylie\Vipps\Resource\EPayment\CancelPayment;
use zaporylie\Vipps\Resource\EPayment\CapturePayment;
use zaporylie\Vipps\Resource\EPayment\GetPayment;
use zaporylie\Vipps\Resource\EPayment\RefundPayment;

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

    /**
     * {@inheritdoc}
     */
    public function cancelPayment(string $reference, string $modification_reference = ''): AdjustPaymentResponse
    {
        $resource = new CancelPayment(
            $this->app,
            $this->getSubscriptionKey(),
            $reference,
            (new RequestCancelPayment())
                ->setModificationReference($modification_reference)
        );
        $resource->setPath($resource->getPath());
        return $resource->call();
    }

    /**
     * {@inheritdoc}
     */
    public function capturePayment(string $reference, Amount $modification_amount, string $modification_reference = ''): AdjustPaymentResponse
    {
        $resource = new CapturePayment(
            $this->app,
            $this->getSubscriptionKey(),
            $reference,
            (new RequestCapturePayment())
                ->setModificationAmount($modification_amount)
                ->setModificationReference($modification_reference)
        );
        $resource->setPath($resource->getPath());
        return $resource->call();
    }

    /**
     * {@inheritdoc}
     */
    public function refundPayment(string $reference, Amount $modification_amount, string $modification_reference = ''): AdjustPaymentResponse
    {
        $resource = new RefundPayment(
            $this->app,
            $this->getSubscriptionKey(),
            $reference,
            (new RequestRefundPayment())
                ->setModificationAmount($modification_amount)
                ->setModificationReference($modification_reference)
        );
        $resource->setPath($resource->getPath());
        return $resource->call();
    }
}
