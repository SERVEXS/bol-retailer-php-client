<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class OfferInsight extends AbstractModel
{
    protected static $modelDefinition = [
        'name' => [ 'model' => null, 'array' => false ],
        'type' => [ 'model' => null, 'array' => false ],
        'total' => [ 'model' => null, 'array' => false ],
        'countries' => [ 'model' => Country::class, 'array' => true ],
        'periods' => [ 'model' => Periods::class, 'array' => true ],
    ];

    /**
     * @var string The name of the requested offer insight.
     */
    public $name;

    /**
     * @var string Interpretation of the data that applies to this measurement.
     */
    public $type;

    /**
     * @var float Total number of customer visits on the product page when the offer had the buy box over the requested period (excluding the current day).
     */
    public $total;

    /**
     * @var Country[]
     */
    public $countries;

    /**
     * @var Periods[]
     */
    public $periods;
}
