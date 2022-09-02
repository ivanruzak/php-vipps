<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RequestCancelPayment.
 *
 * @package Vipps\Model\EPayment
 */
class RequestCancelPayment
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $modificationReference;

    /**
     * Gets modification reference.
     *
     * @return string
     */
    public function getModificationReference(): string
    {
        return $this->modificationReference;
    }

    /**
     * Sets modification reference.
     *
     * @param string $reference
     *   Modification reference.
     *
     * @return $this
     */
    public function setModificationReference(string $reference)
    {
        $this->modificationReference = $reference;
        return $this;
    }
}
