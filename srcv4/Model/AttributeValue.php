<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class AttributeValue extends AbstractModel
{
    protected static $modelDefinition = [
        'value' => [ 'model' => null, 'array' => false ],
        'unitId' => [ 'model' => null, 'array' => false ],
    ];

    /**
     * @var string The value of the attribute.
     */
    public $value;

    /**
     * @var string The unit identifier of the attribute.
     */
    public $unitId;
}
