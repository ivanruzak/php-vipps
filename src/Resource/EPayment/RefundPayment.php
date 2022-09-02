<?php

namespace zaporylie\Vipps\Resource\EPayment;

use zaporylie\Vipps\Model\EPayment\RequestRefundPayment;
use zaporylie\Vipps\Model\EPayment\ResponseRefundPayment;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\VippsInterface;

class RefundPayment extends EPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::POST;

    /**
     * @var string
     */
    protected $path = '/v1/payments/{id}/refund';

    /**
     * GetPayment constructor.
     */
    public function __construct(
        VippsInterface $vipps,
        string $subscription_key,
        string $reference,
        RequestRefundPayment $request_object
    ) {
        parent::__construct($vipps, $subscription_key);
        $this->body = $this
            ->getSerializer()
            ->serialize(
                $request_object,
                'json'
            );
        $this->id = $reference;
    }

  /**
   * @return \zaporylie\Vipps\Model\EPayment\ResponseRefundPayment
   *
   * @throws \zaporylie\Vipps\Exceptions\VippsException
   */
    public function call(): ResponseRefundPayment
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();

        // For now response has empty body, but let's keep that like this,
        // assuming something might be added by "Vipps" in the future.
        /** @var \zaporylie\Vipps\Model\EPayment\ResponseRefundPayment $response_object */
        $response_object = $this
            ->getSerializer()
            ->deserialize(
                $body,
                ResponseRefundPayment::class,
                'json'
            );

        return $response_object;
    }
}
