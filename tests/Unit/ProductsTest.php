<?php

namespace Tests\Unit;

use App\Product;
use App\ProductImage;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateProducts() {

        $p = new Product();
        $p->name = "test";
        $p->desc = "test desc";
        $p->price = 12.50;
        $p->save();

        $p->images()->saveMany([
            new ProductImage([ 'uri' => '', 'product_id' => $p->getKey() ]),
            new ProductImage([ 'uri' => '', 'product_id' => $p->getKey() ]),
            new ProductImage([ 'uri' => '', 'product_id' => $p->getKey() ])
        ]);

        $imgs = $p->images;

        self::assertEquals(3, count($imgs));
    }
}
