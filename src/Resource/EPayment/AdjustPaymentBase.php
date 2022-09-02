<?php

namespace zaporylie\Vipps\Resource\EPayment;

use zaporylie\Vipps\Model\EPayment\AdjustPaymentResponse;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\VippsInterface;

abstract class AdjustPaymentBase extends EPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::POST;

    /**
     * GetPayment constructor.
     */
    public function __construct(
        VippsInterface $vipps,
        string $subscription_key,
        string $reference,
        object $request_object
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
   * @return \zaporylie\Vipps\Model\EPayment\AdjustPaymentResponse
   *
   * @throws \zaporylie\Vipps\Exceptions\VippsException
   */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();

        // For now response has empty body, but let's keep that like this,
        // assuming something might be added by "Vipps" in the future.
        /** @var \zaporylie\Vipps\Model\EPayment\AdjustPaymentResponse $response_object */
        $response_object = $this
            ->getSerializer()
            ->deserialize(
                $body,
                AdjustPaymentResponse::class,
                'json'
            );

        return $response_object;
    }
}
