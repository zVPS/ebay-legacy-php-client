<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property boolean $eligible
 * @property string[] $eligibleCancelReason
 * @property string[] $failureReason
 * @property \DTS\eBaySDK\PostOrder\Types\ItemEligibilityResult[] $itemEligibilityResult
 * @property string $legacyOrderId
 */
class OrderEligibilityResult extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'eligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eligible'
        ],
        'eligibleCancelReason' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'eligibleCancelReason'
        ],
        'failureReason' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'failureReason'
        ],
        'itemEligibilityResult' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ItemEligibilityResult',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'itemEligibilityResult'
        ],
        'legacyOrderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'legacyOrderId'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
