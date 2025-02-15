<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class UpdateWorkspaceRequest
{
    /**
     * The ID or slug of the workspace.
     *
     * @var string $idOrSlug
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=idOrSlug')]
    public string $idOrSlug;

    public function __construct()
    {
        $this->idOrSlug = '';
    }
}