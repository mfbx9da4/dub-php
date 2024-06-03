<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class RateLimitExceeded
{
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('Dub\Models\Components\RateLimitExceededError')]
    public RateLimitExceededError $error;

    public function __construct()
    {
        $this->error = new \Dub\Models\Components\RateLimitExceededError();
    }
}