<?php

namespace DTS\eBaySDK\Fulfillment\Types;

/**
 *
 * @property \DTS\eBaySDK\Fulfillment\Enums\VatTaxTypeEnum $name
 * @property string $name  The value returned in this field is the VAT identifier number (VATIN), which will vary by country/region. 
 * This field will be returned if VAT tax is applicable for the order. 
 * The name field indicates the VAT tax type, which will vary by country/region:
 *     ABN: eBay AU tax ID
 *     IOSS: eBay EU IOSS number / eBay UK IOSS number
 *     IRD: eBay NZ tax ID
 *     OSS: eBay DE VAT ID
 *     VOEC: eBay NO number
 * 
 */
class EbayTaxReference extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'value' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'value'
        ],
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
