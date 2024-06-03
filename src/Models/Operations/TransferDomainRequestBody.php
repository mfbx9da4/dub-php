<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class TransferDomainRequestBody
{
    /**
     * The ID of the new workspace to transfer the domain to.
     *
     * @var string $newWorkspaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('newWorkspaceId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $newWorkspaceId;

    public function __construct()
    {
        $this->newWorkspaceId = '';
    }
}