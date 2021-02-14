<?php

namespace Picqer\BolRetailerV4\Model;

// This class is auto generated by OpenApi\ModelGenerator
class CreateSubscriptionRequest extends AbstractModel
{
    protected static $modelDefinition = [
        'resources' => [ 'model' => null, 'array' => true ],
        'url' => [ 'model' => null, 'array' => false ],
    ];

    /**
     * @var array Type of event
     */
    public $resources;

    /**
     * @var string URL to receive this WebHook notification
     */
    public $url;
}
