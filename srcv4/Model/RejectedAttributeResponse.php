<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class RejectedAttributeResponse extends AbstractModel
{
    protected static $modelDefinition = [
        'attributeId' => [ 'model' => null, 'array' => false ],
        'rejectionErrors' => [ 'model' => RejectionError::class, 'array' => true ],
    ];

    /**
     * @var string Identifier of the attribute from the data model.
     */
    public $attributeId;

    /**
     * @var RejectionError[]
     */
    public $rejectionErrors;
}
