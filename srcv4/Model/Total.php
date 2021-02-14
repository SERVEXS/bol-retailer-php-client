<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Total extends AbstractModel
{
    protected static $modelDefinition = [
        'minimum' => [ 'model' => null, 'array' => false ],
        'maximum' => [ 'model' => null, 'array' => false ],
    ];

    /**
     * @var float Minimum number of estimated sales expectations on the bol.com platform.
     */
    public $minimum;

    /**
     * @var float Maximum number of estimated sales expectations on the bol.com platform.
     */
    public $maximum;
}
