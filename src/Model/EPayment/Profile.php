<?php

namespace zaporylie\Vipps\Model\EPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Profile.
 *
 * @package Vipps\Model\EPayment
 */
class Profile
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $scope;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $sub;

    /**
     * Gets scope.
     *
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * Gets sub.
     *
     * @return string
     */
    public function getSub(): string
    {
        return $this->sub;
    }
}
