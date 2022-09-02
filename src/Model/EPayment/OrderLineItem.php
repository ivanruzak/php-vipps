<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrderLineItem.
 *
 * @package Vipps\Model\EPayment
 */
class OrderLineItem
{

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $amountExcludingTax;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $amountIncludingTax;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $description;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $productUrl;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $quantity;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $taxAmount;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $taxPercentage;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    protected $discount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $quantityUnit;

    /**
     * Gets amount excluding tax.
     *
     * @return int
     */
    public function getAmountExcludingTax(): int
    {
        return $this->amountExcludingTax;
    }

    /**
     * Gets amount including tax.
     *
     * @return int
     */
    public function getAmountIncludingTax(): int
    {
        return $this->amountIncludingTax;
    }

    /**
     * Gets description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Gets product id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Gets product url.
     *
     * @return string
     */
    public function getProductUrl(): string
    {
        return $this->productUrl;
    }

    /**
     * Gets quantity.
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Gets tax amount.
     *
     * @return string
     */
    public function getTaxAmount(): string
    {
        return $this->taxAmount;
    }

    /**
     * Gets tax percentage.
     *
     * @return int
     */
    public function getTaxPercentage(): int
    {
        return $this->taxPercentage;
    }

    /**
     * Gets discount.
     *
     * @return int|null
     */
    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    /**
     * Gets quantity unit.
     *
     * @return string
     */
    public function getQuantityUnit(): string
    {
        return $this->quantityUnit;
    }
}
