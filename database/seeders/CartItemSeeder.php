<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'transaction_id' => 1,
                'item_id' => 37,
                'quantity' => 2,
                'size' => '22oz',
                'price' => '99.00',
                'addon_id' => 1,
                'sugarlvl_id' => 3,
            ),
            array(
                'transaction_id' => 1,
                'item_id' => 32,
                'quantity' => 1,
                'size' => '22oz',
                'price' => '90.00',
                'addon_id' => 2,
                'sugarlvl_id' => 2,
            ),
            array(
                'transaction_id' => 1,
                'item_id' => 34,
                'quantity' => 1,
                'size' => '16oz',
                'price' => '89.00',
                'addon_id' => null,
                'sugarlvl_id' => null,
            ),
            array(
                'transaction_id' => 2,
                'item_id' => 32,
                'quantity' => 1,
                'size' => '22oz',
                'price' => '90.00',
                'addon_id' => 2,
                'sugarlvl_id' => 2,
            )
        );
            DB::table('cart_items')->insert($data);
    }
}
