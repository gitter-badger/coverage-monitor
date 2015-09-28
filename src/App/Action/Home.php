<?php

namespace EY\App\Action;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\HtmlResponse;

final class Home
{
    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param callable $next
     * @return HtmlResponse
     */
    public function __invoke(RequestInterface $request, ResponseInterface $response, callable $next)
    {
        return new HtmlResponse('<h1>Please read API documentation on http://exceptionyard.com</h1>', 404);
    }
}
