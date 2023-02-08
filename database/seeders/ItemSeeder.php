<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_name' => 'Vegetable 1',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 1000000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 2',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 100000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 3',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 200000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 4',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 500000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 5',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 250000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 6',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 100000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 7',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 900000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 8',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 600000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 9',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 450000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 10',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 690000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 11',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 100000
        ]);

        DB::table('items')->insert([
            'item_name' => 'Vegetable 12',
            'item_desc' => 'LIMITED VEGETABLE! Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color. Notes: This vegetable won 1st place at Canna UK National Giant Vegetables Championship.',
            'price' => 200000
        ]);
    }
}
