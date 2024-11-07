<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Product;
use App\Models\SaleItem;
use App\Models\SaleOrder;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $clients = Client::factory(1000)->create();

        Supplier::factory(1000)->create();

        $products = Product::factory(1000)->create();

        if ($products->isEmpty()) {
            throw new \Exception('No products found. Please ensure products are created.');
        }

        $clients->each(function ($client) use ($products) {
            $saleOrder = SaleOrder::factory()->create([
                'fk_id_client' => $client->id_client,
            ]);

            SaleItem::factory(rand(1, 1000))->create([
                'fk_id_sale_order' => $saleOrder->id_sale_order,
                'fk_id_product' => $products->random()->id_product,
            ]);
        });
    }
}
