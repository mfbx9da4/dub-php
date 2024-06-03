<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub;

class Metatags
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
     * Retrieve the metatags for a URL
     *
     * Retrieve the metatags for a URL.
     *
     * @param  string  $url
     * @return \Dub\Models\Operations\GetMetatagsResponse
     */
    public function get(
        string $url,
    ): \Dub\Models\Operations\GetMetatagsResponse {
        $request = new \Dub\Models\Operations\GetMetatagsRequest();
        $request->url = $url;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/metatags');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\GetMetatagsRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\GetMetatagsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->object = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Operations\GetMetatagsResponseBody', 'json');
            }
        }

        return $response;
    }
}