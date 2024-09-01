<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductValidationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function title_is_required()
    {
        $response = $this->post('/products', [
            'description' => 'Product description',
            'price' => 1000,
            'stock_quantity' => 10,
        ]);

        $response->assertSessionHasErrors('title');
    }

    /** @test */
    public function price_must_be_numeric()
    {
        $response = $this->post('/products', [
            'title' => 'Product Title',
            'description' => 'Product description',
            'price' => 'invalid_price',
            'stock_quantity' => 10,
        ]);

        $response->assertSessionHasErrors('price');
    }

    /** @test */
    public function stock_quantity_must_be_integer()
    {
        $response = $this->post('/products', [
            'title' => 'Product Title',
            'description' => 'Product description',
            'price' => 1000,
            'stock_quantity' => 'invalid_quantity',
        ]);

        $response->assertSessionHasErrors('stock_quantity');
    }
}
