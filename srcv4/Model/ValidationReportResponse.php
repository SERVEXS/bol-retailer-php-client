<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ValidationReportResponse extends AbstractModel
{
    protected static $modelDefinition = [
        'productContents' => [ 'model' => ProductContentResponse::class, 'array' => true ],
    ];

    /**
     * @var ProductContentResponse[]
     */
    public $productContents;
}
