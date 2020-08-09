<?php

namespace Nordpeak\Tests;

use Nordpeak\ReadableStringGenerator;
use PHPUnit\Framework\TestCase;

class ReadableStringGeneratorTest extends TestCase
{

    private $vowels = [];
    private $consonants = [];

    public function setUp() : void
    {
        parent::setUp();

        $this->vowels = ReadableStringGenerator::$vowels;
        $this->consonants = ReadableStringGenerator::$consonants;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        ReadableStringGenerator::$vowels = $this->vowels;
        ReadableStringGenerator::$consonants = $this->consonants;
    }

    public function testReadableStringWithoutOptions()
    {
        ReadableStringGenerator::$vowels = ['O'];
        ReadableStringGenerator::$consonants = ['X'];

        $random_string = ReadableStringGenerator::generate();

        $this->assertEquals("XOXOXO", $random_string); 
    }

    public function testReadableStringWithLengthOptions()
    {
        ReadableStringGenerator::$vowels = ['O'];
        ReadableStringGenerator::$consonants = ['L'];

        $random_string = ReadableStringGenerator::generate(['length' => 3]);

        $this->assertEquals("LOL", $random_string); 
    }
}
