<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class UpdateTagRequest
{
    /**
     * The ID of the tag to update.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * The ID of the workspace.
     *
     * @var ?string $workspaceId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=workspaceId')]
    public ?string $workspaceId = null;

    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?UpdateTagRequestBody $requestBody = null;

    public function __construct()
    {
        $this->id = '';
        $this->workspaceId = null;
        $this->requestBody = null;
    }
}