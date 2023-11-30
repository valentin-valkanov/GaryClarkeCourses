<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ProductRepositoryTest extends TestCase
{
    public function testProductsAreReturned(): void
    {
        $productRepoMock = $this->createMock(\App\ProductRepository::class);

        $mockProductArray = [
            ['id' => 1, 'name' => 'Acme Radio Knobs'],
            ['id' => 2, 'name' => 'Apple iPhone']
        ];

        $productRepoMock->method('fetchProducts')
                        ->willReturn($mockProductArray);

        $this->assertCount(2, $productRepoMock->fetchProducts());
     }
}