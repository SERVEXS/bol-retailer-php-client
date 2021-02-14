<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ShipmentFulfilment extends AbstractModel
{
    protected static $modelDefinition = [
        'method' => [ 'model' => null, 'array' => false ],
        'distributionParty' => [ 'model' => null, 'array' => false ],
        'latestDeliveryDate' => [ 'model' => null, 'array' => false ],
    ];

    /**
     * @var string Specifies whether this shipment has been fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). Defaults to FBR.
     */
    public $method;

    /**
     * @var string The party that manages the distribution, either bol.com or the retailer itself.
     */
    public $distributionParty;

    /**
     * @var string The ultimate delivery date at which this order must be delivered at the customer's shipping address. This field is empty in case the exactDeliveryDate is filled.
     */
    public $latestDeliveryDate;
}
