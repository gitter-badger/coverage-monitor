<?php

namespace EY\App\Action;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateInterface;

final class Home
{
    /** @var TemplateInterface */
    private $templates;

    /**
     * @param TemplateInterface $templates
     */
    public function __construct(TemplateInterface $templates)
    {
        $this->templates = $templates;
    }

    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param callable $next
     * @return HtmlResponse
     */
    public function __invoke(RequestInterface $request, ResponseInterface $response, callable $next)
    {
        return new HtmlResponse($this->templates->render('page::home'));
    }
}
