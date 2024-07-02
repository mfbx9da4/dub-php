<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub;

class Tags
{
    private SDKConfiguration $sdkConfiguration;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Retrieve a list of tags
     *
     * Retrieve a list of tags for the authenticated workspace.
     *
     * @param  ?string  $workspaceId
     * @param  ?string  $projectSlug
     * @return \Dub\Models\Operations\GetTagsResponse
     */
    public function list(
        ?string $workspaceId = null,
        ?string $projectSlug = null,
    ): \Dub\Models\Operations\GetTagsResponse {
        $request = new \Dub\Models\Operations\GetTagsRequest();
        $request->workspaceId = $workspaceId;
        $request->projectSlug = $projectSlug;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/tags');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\GetTagsRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\GetTagsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->tagSchemas = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Dub\Models\Components\TagSchema>', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\BadRequest', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorized = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Unauthorized', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbidden = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Forbidden', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFound = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\NotFound', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->conflict = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Conflict', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 410) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->inviteExpired = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\InviteExpired', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unprocessableEntity = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\UnprocessableEntity', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 429) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rateLimitExceeded = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\RateLimitExceeded', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalServerError = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\InternalServerError', 'json');
            }
        }

        return $response;
    }

    /**
     * Create a new tag
     *
     * Create a new tag for the authenticated workspace.
     *
     * @param  ?string  $workspaceId
     * @param  ?string  $projectSlug
     * @param  ?\Dub\Models\Operations\CreateTagRequestBody  $requestBody
     * @return \Dub\Models\Operations\CreateTagResponse
     */
    public function create(
        ?string $workspaceId = null,
        ?string $projectSlug = null,
        ?\Dub\Models\Operations\CreateTagRequestBody $requestBody = null,
    ): \Dub\Models\Operations\CreateTagResponse {
        $request = new \Dub\Models\Operations\CreateTagRequest();
        $request->workspaceId = $workspaceId;
        $request->projectSlug = $projectSlug;
        $request->requestBody = $requestBody;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/tags');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\CreateTagRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\CreateTagResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->tagSchema = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\TagSchema', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\BadRequest', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorized = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Unauthorized', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbidden = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Forbidden', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFound = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\NotFound', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->conflict = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Conflict', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 410) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->inviteExpired = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\InviteExpired', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unprocessableEntity = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\UnprocessableEntity', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 429) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rateLimitExceeded = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\RateLimitExceeded', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalServerError = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\InternalServerError', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a tag
     *
     * Update a tag in the workspace.
     *
     * @param  string  $id
     * @param  ?string  $workspaceId
     * @param  ?string  $projectSlug
     * @param  ?\Dub\Models\Operations\UpdateTagRequestBody  $requestBody
     * @return \Dub\Models\Operations\UpdateTagResponse
     */
    public function update(
        string $id,
        ?string $workspaceId = null,
        ?string $projectSlug = null,
        ?\Dub\Models\Operations\UpdateTagRequestBody $requestBody = null,
    ): \Dub\Models\Operations\UpdateTagResponse {
        $request = new \Dub\Models\Operations\UpdateTagRequest();
        $request->id = $id;
        $request->workspaceId = $workspaceId;
        $request->projectSlug = $projectSlug;
        $request->requestBody = $requestBody;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/tags/{id}', \Dub\Models\Operations\UpdateTagRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\UpdateTagRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\UpdateTagResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->tagSchema = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\TagSchema', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\BadRequest', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorized = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Unauthorized', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbidden = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Forbidden', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFound = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\NotFound', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->conflict = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Conflict', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 410) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->inviteExpired = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\InviteExpired', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unprocessableEntity = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\UnprocessableEntity', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 429) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rateLimitExceeded = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\RateLimitExceeded', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalServerError = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\InternalServerError', 'json');
            }
        }

        return $response;
    }
}