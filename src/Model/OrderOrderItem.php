<?php

namespace Picqer\BolRetailerV10\Model;

use Picqer\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class OrderOrderItem extends AbstractModel
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
            'orderItemId' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'cancellationRequest' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'fulfilment' => [ 'model' => OrderFulfilment::class, 'enum' => null, 'array' => false ],
            'offer' => [ 'model' => OrderOffer::class, 'enum' => null, 'array' => false ],
            'product' => [ 'model' => OrderProduct::class, 'enum' => null, 'array' => false ],
            'quantity' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'quantityShipped' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'quantityCancelled' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'unitPrice' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'commission' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'additionalServices' => [ 'model' => AdditionalService::class, 'enum' => null, 'array' => true ],
            'latestChangedDateTime' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The id for the order item. One order can have multiple order items, but the list can only take one
     * item.
     */
    public $orderItemId;

    /**
     * @var bool Indicates whether the order was cancelled on request of the customer before the retailer has shipped
     * it.
     */
    public $cancellationRequest;

    /**
     * @var OrderFulfilment
     */
    public $fulfilment;

    /**
     * @var OrderOffer
     */
    public $offer;

    /**
     * @var OrderProduct
     */
    public $product;

    /**
     * @var int Amount of ordered products for this order item id.
     */
    public $quantity;

    /**
     * @var int Amount of shipped products for this order item id.
     */
    public $quantityShipped;

    /**
     * @var int Amount of cancelled products for this order item id.
     */
    public $quantityCancelled;

    /**
     * @var float The selling price to the customer of a single unit including VAT.
     */
    public $unitPrice;

    /**
     * @var float The commission for all quantities of this order item.
     */
    public $commission;

    /**
     * @var AdditionalService[]
     */
    public $additionalServices = [];

    /**
     * @var string The date and time in ISO 8601 format when the orderItem was last changed.
     */
    public $latestChangedDateTime;

    public function getLatestChangedDateTime(): ?\DateTime
    {
        if (empty($this->latestChangedDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->latestChangedDateTime);
    }

    /**
     * Returns an array with the serviceTypes from additionalServices.
     * @return string[] ServiceTypes from additionalServices.
     */
    public function getAdditionalServicesServiceTypes(): array
    {
        return array_map(function ($model) {
            return $model->serviceType;
        }, $this->additionalServices);
    }

    /**
     * Sets additionalServices by an array of serviceTypes.
     * @param string[] $serviceTypes ServiceTypes for additionalServices.
     */
    public function setAdditionalServicesServiceTypes(array $serviceTypes): void
    {
        $this->additionalServices = array_map(function ($serviceType) {
            return AdditionalService::constructFromArray(['serviceType' => $serviceType]);
        }, $serviceTypes);
    }

    /**
     * Adds a new AdditionalService to additionalServices by serviceType.
     * @param string $serviceType ServiceType for the AdditionalService to add.
     */
    public function addAdditionalServicesServiceType(string $serviceType): void
    {
        $this->additionalServices[] = AdditionalService::constructFromArray(['serviceType' => $serviceType]);
    }
}
