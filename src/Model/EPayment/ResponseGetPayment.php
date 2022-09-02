<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ResponseGetPayment.
 *
 * @package Vipps\Model\EPayment
 */
class ResponseGetPayment
{

    /**
     * @var \zaporylie\Vipps\Model\EPayment\TransactionAggregate
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\TransactionAggregate")
     */
    protected $aggregate;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\Amount")
     */
    protected $amount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $authorisationType;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $state;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $directCapture;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\Customer
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\Customer")
     */
    protected $customer;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $customerInteraction;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\IndustryData
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\IndustryData")
     */
    protected $industryData;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\Logistics
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\Logistics")
     */
    protected $logistics;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\OrderInformation
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\OrderInformation")
     */
    protected $orderInformation;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\PaymentMethod
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\PaymentMethod")
     */
    protected $paymentMethod;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\Profile
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\Profile")
     */
    protected $profile;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $pspReference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $redirectUrl;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $subReference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $reference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $returnUrl;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $userFlow;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $paymentDescription;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $callbackUrl;

    /**
     * Gets payment transaction aggregate.
     *
     * @return \zaporylie\Vipps\Model\EPayment\TransactionAggregate
     */
    public function getTransactionAggregate(): TransactionAggregate
    {
        return $this->aggregate;
    }

    /**
     * Gets payment amount.
     *
     * @return \zaporylie\Vipps\Model\EPayment\Amount
     */
    public function getAmount(): Amount
    {
        return $this->amount;
    }

    /**
     * Gets authorisation type.
     *
     * @return string
     */
    public function getAuthorisationType(): string
    {
        return $this->authorisationType;
    }

    /**
     * Gets payment state.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Gets value if direct capture or not.
     *
     * @return bool
     */
    public function isDirectCapture(): bool
    {
        return $this->directCapture;
    }

    /**
     * Gets customer.
     *
     * @return \zaporylie\Vipps\Model\EPayment\Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * Gets customer interaction.
     *
     * @return string
     */
    public function getCustomerInteraction(): string
    {
        return $this->customerInteraction;
    }

    /**
     * Gets industry data.
     *
     * @return \zaporylie\Vipps\Model\EPayment\IndustryData
     */
    public function getIndustryData(): IndustryData
    {
        return $this->industryData;
    }

    /**
     * Gets logistics options.
     *
     * @return \zaporylie\Vipps\Model\EPayment\Logistics
     */
    public function getLogistics(): Logistics
    {
        return $this->logistics;
    }

    /**
     * Gets order information data.
     *
     * @return \zaporylie\Vipps\Model\EPayment\OrderInformation
     */
    public function getOrderInformation(): OrderInformation
    {
        return $this->orderInformation;
    }

    /**
     * Gets payment method data.
     *
     * @return \zaporylie\Vipps\Model\EPayment\PaymentMethod
     */
    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    /**
     * Gets profile data.
     *
     * @return \zaporylie\Vipps\Model\EPayment\Profile
     */
    public function getProfile(): Profile
    {
      return $this->profile;
    }

    /**
     * Gets reference value for a payment defined by Vipps.
     *
     * @return string
     */
    public function getPspReference(): string
    {
        return $this->pspReference;
    }

    /**
     * Gets redirect url.
     *
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    /**
     * Gets reference.
     *
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * Gets return url.
     *
     * @return string
     */
    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    /**
     * Gets sub reference.
     *
     * @return string
     */
    public function getSubReference(): string
    {
        return $this->subReference;
    }

    /**
     * Gets user flow.
     *
     * @return string
     */
    public function getUserFlow(): string
    {
        return $this->userFlow;
    }

    /**
     * Gets payment description.
     *
     * @return string
     */
    public function getPaymentDescription(): string
    {
        return $this->paymentDescription;
    }

    /**
     * Gets callback url.
     *
     * @return string
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }
}
