<?php


use App\CodeWars;
use PHPUnit\Framework\TestCase;

class CodewarsTest extends TestCase
{

    private CodeWars $codewars;

    protected function setUp(): void
    {
        parent::setUp();
        $this->codewars = new CodeWars();
    }

    public function test_example()
    {

    }
}
