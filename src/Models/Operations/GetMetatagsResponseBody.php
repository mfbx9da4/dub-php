<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** GetMetatagsResponseBody - The retrieved metatags */
class GetMetatagsResponseBody
{
    /**
     * The meta title tag for the URL.
     *
     * @var string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $title;

    /**
     * The meta description tag for the URL.
     *
     * @var string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;

    /**
     * The OpenGraph image for the URL.
     *
     * @var string $image
     */
    #[\JMS\Serializer\Annotation\SerializedName('image')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $image;

    public function __construct()
    {
        $this->title = '';
        $this->description = '';
        $this->image = '';
    }
}