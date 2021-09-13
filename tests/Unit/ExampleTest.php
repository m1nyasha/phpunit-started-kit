<?php


use App\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    private Example $example;

    protected function setUp(): void
    {
        parent::setUp();
        $this->example = new Example();
    }

    public function test_example()
    {
        $this->assertEquals(31.400000000000002, $this->example->exampleFunc(10));
    }
}
