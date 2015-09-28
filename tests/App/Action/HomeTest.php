<?php

namespace EYTest\App\Action;

use EYTest\TestCase;
use EY\App\Action\Home;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeTest extends TestCase
{
    /** @var Home */
    private $SUT;

    protected function setUp()
    {
        parent::setUp();

        $this->SUT = new Home;
    }

    /**
     * @test
     */
    public function it_returns_a_psr_response()
    {
        $this->assertInstanceOf(ResponseInterface::class, $this->call());
    }

    /**
     * @test
     */
    public function the_response_is_not_found()
    {
        $response = $this->call();

        $this->assertEquals(404, $response->getStatusCode());
    }

    /**
     * @return ResponseInterface
     */
    private function call()
    {
        $controller = $this->SUT;

        $request = $this->prophesize(RequestInterface::class)->reveal();
        $response = $this->prophesize(ResponseInterface::class)->reveal();
        $callable = function () {};

        return $controller($request, $response, $callable);
    }
}
