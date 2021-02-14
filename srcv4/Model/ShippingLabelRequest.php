<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ShippingLabelRequest extends AbstractModel
{
    protected static $modelDefinition = [
        'orderItems' => [ 'model' => OrderItem::class, 'array' => true ],
        'shippingLabelOfferId' => [ 'model' => null, 'array' => false ],
    ];

    /**
     * @var OrderItem[] Order items for which the delivery options are requested.
     */
    public $orderItems;

    /**
     * @var string Shipping label offer id for which you request a shipping label.
     */
    public $shippingLabelOfferId;
}
