<?php declare(strict_types=1);


class ExampleProcessorTest extends \PHPUnit\Framework\TestCase
{
    /** @test*/
    public function the_example_processor_works(): void
    {
        $mockFileWriter = $this->createMock(\App\OldStuff\JsonFileWriter::class);
        $mockFileWriter->method('writeToFile')->willReturn(true);

        $processor = new \App\OldStuff\ExampleProcessor($mockFileWriter);
        $result = $processor->process(['foo' => 'bar']);
        $this->assertTrue($result);

    }
}