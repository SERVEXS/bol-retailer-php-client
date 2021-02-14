<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Attribute extends AbstractModel
{
    protected static $modelDefinition = [
        'id' => [ 'model' => null, 'array' => false ],
        'values' => [ 'model' => AttributeValue::class, 'array' => true ],
    ];

    /**
     * @var string Identifier of the attribute from the data model.
     */
    public $id;

    /**
     * @var AttributeValue[] A list of attribute values.
     */
    public $values;
}
