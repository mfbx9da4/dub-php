<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class RetrieveAnalyticsResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * Analytics data
     *
     * @var mixed $oneOf
     */
    public mixed $oneOf = null;

    /**
     * The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing).
     *
     * @var ?\Dub\Models\Components\BadRequest $badRequest
     */
    public ?\Dub\Models\Components\BadRequest $badRequest = null;

    /**
     * Although the HTTP standard specifies "unauthorized", semantically this response means "unauthenticated". That is, the client must authenticate itself to get the requested response.
     *
     * @var ?\Dub\Models\Components\Unauthorized $unauthorized
     */
    public ?\Dub\Models\Components\Unauthorized $unauthorized = null;

    /**
     * The client does not have access rights to the content; that is, it is unauthorized, so the server is refusing to give the requested resource. Unlike 401 Unauthorized, the client's identity is known to the server.
     *
     * @var ?\Dub\Models\Components\Forbidden $forbidden
     */
    public ?\Dub\Models\Components\Forbidden $forbidden = null;

    /**
     * The server cannot find the requested resource.
     *
     * @var ?\Dub\Models\Components\NotFound $notFound
     */
    public ?\Dub\Models\Components\NotFound $notFound = null;

    /**
     * This response is sent when a request conflicts with the current state of the server.
     *
     * @var ?\Dub\Models\Components\Conflict $conflict
     */
    public ?\Dub\Models\Components\Conflict $conflict = null;

    /**
     * This response is sent when the requested content has been permanently deleted from server, with no forwarding address.
     *
     * @var ?\Dub\Models\Components\InviteExpired $inviteExpired
     */
    public ?\Dub\Models\Components\InviteExpired $inviteExpired = null;

    /**
     * The request was well-formed but was unable to be followed due to semantic errors.
     *
     * @var ?\Dub\Models\Components\UnprocessableEntity $unprocessableEntity
     */
    public ?\Dub\Models\Components\UnprocessableEntity $unprocessableEntity = null;

    /**
     * The user has sent too many requests in a given amount of time ("rate limiting")
     *
     * @var ?\Dub\Models\Components\RateLimitExceeded $rateLimitExceeded
     */
    public ?\Dub\Models\Components\RateLimitExceeded $rateLimitExceeded = null;

    /**
     * The server has encountered a situation it does not know how to handle.
     *
     * @var ?\Dub\Models\Components\InternalServerError $internalServerError
     */
    public ?\Dub\Models\Components\InternalServerError $internalServerError = null;

    public function __construct()
    {
        $this->contentType = '';
        $this->statusCode = 0;
        $this->rawResponse = null;
        $this->oneOf = null;
        $this->badRequest = null;
        $this->unauthorized = null;
        $this->forbidden = null;
        $this->notFound = null;
        $this->conflict = null;
        $this->inviteExpired = null;
        $this->unprocessableEntity = null;
        $this->rateLimitExceeded = null;
        $this->internalServerError = null;
    }
}