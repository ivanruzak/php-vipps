<?php

namespace zaporylie\Vipps\Resource\EPayment;

use zaporylie\Vipps\Model\EPayment\ResponseGetPayment;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\VippsInterface;

class GetPayment extends EPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::GET;

    /**
     * @var string
     */
    protected $path = '/v1/payments/{id}';

    /**
     * GetPayment constructor.
     */
    public function __construct(VippsInterface $vipps, string $subscription_key, string $idempotency_key, string $reference)
    {
        parent::__construct($vipps, $subscription_key, $idempotency_key);
        $this->id = $reference;
    }

  /**
   * @return \zaporylie\Vipps\Model\EPayment\ResponseGetPayment
   *
   * @throws \zaporylie\Vipps\Exceptions\VippsException
   */
    public function call(): ResponseGetPayment
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\EPayment\ResponseGetPayment $response_object */
        $response_object = $this
            ->getSerializer()
            ->deserialize(
                $body,
              ResponseGetPayment::class,
                'json'
            );

        return $response_object;
    }
}
