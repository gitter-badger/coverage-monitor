<?php

namespace EYTest\Services\Reader;

use EYTest\TestCase;
use EY\Services\Reader\Reader;

class ReaderTest extends TestCase
{
    /** @var Reader */
    private $SUT;

    protected function setUp()
    {
        parent::setUp();

        $this->SUT = new Reader();
    }

    /**
     * @test
     */
    public function it_is_instance_of_reader()
    {
        $this->assertInstanceOf(Reader::class, $this->SUT);
    }
}
