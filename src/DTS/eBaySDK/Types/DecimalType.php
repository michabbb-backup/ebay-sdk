<?php
namespace DTS\eBaySDK\Types;

/**
 * @property integer $value
 */
class DecimalType extends \DTS\eBaySDK\Types\BaseType
{
    public function __construct(array $values = [])
    {
        $properties = [
            'value' => [
                'type' => 'integer',
                'unbound' => false,
                'attribute' => false
            ]
        ];

        list($parentValues, $childValues) = self::getParentValues($properties, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], $properties);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
