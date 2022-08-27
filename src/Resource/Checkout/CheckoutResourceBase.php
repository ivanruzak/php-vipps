<?php

namespace zaporylie\Vipps\Resource\Checkout;

use zaporylie\Vipps\Resource\ResourceBase;
use zaporylie\Vipps\VippsInterface;

/**
 * Class CheckoutResourceBase.
 *
 * @package Vipps\Resource\Checkout
 */
abstract class CheckoutResourceBase extends ResourceBase
{

    /**
     * {@inheritdoc}
     */
    public function __construct(VippsInterface $vipps, string $subscription_key, string $client_secret)
    {
        parent::__construct($vipps, $subscription_key);

        // Client secret should be set in headers.
        $this->headers['client_secret'] = $client_secret;
    }
}
