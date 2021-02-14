<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class AdditionalService extends AbstractModel
{
    protected static $modelDefinition = [
        'serviceType' => [ 'model' => null, 'array' => false ],
    ];

    /**
     * @var string An additional service type that the customer selected when purchasing this order item.
     */
    public $serviceType;
}
