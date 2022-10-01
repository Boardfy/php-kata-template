<?php

declare(strict_types=1);

namespace Test;

use App\HelloWord;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld(): void
    {
        $helloWorld = new HelloWord();
        $actual = $helloWorld->hello();

        self::assertEquals('Hello World', $actual);
    }
}
