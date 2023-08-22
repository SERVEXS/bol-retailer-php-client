<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Order extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'orderId' => [ 'model' => null, 'array' => false ],
            'pickupPoint' => [ 'model' => null, 'array' => false ],
            'orderPlacedDateTime' => [ 'model' => null, 'array' => false ],
            'shipmentDetails' => [ 'model' => ShipmentDetails::class, 'array' => false ],
            'billingDetails' => [ 'model' => BillingDetails::class, 'array' => false ],
            'orderItems' => [ 'model' => OrderOrderItem::class, 'array' => true ],
        ];
    }

    /**
     * @var string The identifier of the order.
     */
    public $orderId;

    /**
     * @var bool Indicates whether this order is shipped to a Pick Up Point.
     */
    public $pickupPoint;

    /**
     * @var string The date and time in ISO 8601 format when the order was placed.
     */
    public $orderPlacedDateTime;

    /**
     * @var ShipmentDetails The address details where this order needs to be shipped to. This can be the customers' own
     * address, a (company) business address or a Pick Up Point address.
     */
    public $shipmentDetails;

    /**
     * @var BillingDetails The details of the customer that is responsible for the financial fulfillment of this
     * shipment.
     */
    public $billingDetails;

    /**
     * @var OrderOrderItem[]
     */
    public $orderItems = [];

    public function getOrderPlacedDateTime(): ?\DateTime
    {
        if (empty($this->orderPlacedDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->orderPlacedDateTime);
    }
}
