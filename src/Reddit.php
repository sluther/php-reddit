<?php

namespace PhpReddit\PhpReddit;

use GuzzleHttp\Client;
use PhpReddit\PhpReddit\Models\Base as Model;
use PhpReddit\PhpReddit\Models\Submission;
use PhpReddit\PhpReddit\Models\Subreddit;
use PhpReddit\PhpReddit\Models\Redditor;
use Exception;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Uri;
use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Rudolf\OAuth2\Client\Provider\Reddit as OAuth;
use stdClass;

class Reddit
{
    const HTTP_METHOD_GET = 'GET';
    const HTTP_METHOD_POST = 'POST';

    const REDDIT_API_URL = 'https://oauth.reddit.com';

    private OAuth $oauth;
    private Guzzle $client;

    /**
     * @param string $clientId
     * @param string $clientSecret
     * @param string $redirectUri
     * @param string $userAgent
     */
    public function __construct(string $clientId, string $clientSecret, string $redirectUri, string $userAgent)
    {
        $this->oauth = new OAuth([
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'redirectUri' => $redirectUri,
            'userAgent' => $userAgent
        ]);

        $this->client = new Client([
            'base_uri' => self::REDDIT_API_URL
        ]);

        Model::setConnection($this);
    }

    public function oauth()
    {
        return $this->oauth;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $params
     * @param AccessToken|null $accessToken
     * @return RequestInterface
     * @throws GuzzleException
     */
    public function buildRequest(
        string $method, string $uri, array $params, ?AccessToken $accessToken = null
    ): RequestInterface
    {
        $uri = (new Uri(self::REDDIT_API_URL))->withPath($uri);

        $options = [];

        if (!empty($params) && $method == self::HTTP_METHOD_GET) {
            $uri = Uri::withQueryValues($uri, $params);
        }

        if (!empty($params) && $method == self::HTTP_METHOD_POST) {
            $options['body'] = $params;
        }

        if (isset($params)) {
            switch($method) {
                case self::HTTP_METHOD_GET:
                    $options['query'] = $params;
                    break;
                case self::HTTP_METHOD_POST:
                    $options['body'] = $params;
                    break;
            }
        }

        if (!is_null($accessToken)) {
            $request = $this->oauth->getAuthenticatedRequest($method, $uri, $accessToken, $options);
        } else {
            $request = $this->oauth->getRequest($method, $uri, $options);
        }

        return $request;
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->client->sendRequest($request);
    }

    public function parseResponse(ResponseInterface $response)
    {

    }
}
