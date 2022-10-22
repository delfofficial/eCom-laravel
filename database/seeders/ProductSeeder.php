<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            "name"=>"LG mobile",
            "price"=>"100",
            "description"=>"smartphone with 5GB ram",
            "category"=>"mobile",
            "gallery"=>"https://freesvg.org/iphone-de.webp",
        ],
        [
            "name"=>"opp mobile",
            "price"=>"150",
            "description"=>"smartphone with 2GB ram",
            "category"=>"mobile",
            "gallery"=>"https://www.vectorstock.com/royalty-free-vector/realistic-smartphone-design-pocophone-electronic-vector-37656491.webp",
        ],
        [
            "name"=>"Panasonic TV",
            "price"=>"350",
            "description"=>"Digital TV",
            "category"=>"TV",
            "gallery"=>"https://cdn.vectorstock.com/i/preview-1x/53/81/wide-tv-monitor-mock-up-isolated-vector-22965381.webp",
        ],
        [
            "name"=>" Sony TV",
            "price"=>"490",
            "description"=>"smart tv",
            "category"=>"TV",
            "gallery"=>"https://cdn.vectorstock.com/i/preview-1x/25/47/flat-screen-monitor-tv-vector-52547.webp",
        ],
        [
            "name"=>"fridge",
            "price"=>"1000",
            "description"=>"fridge",
            "category"=>"fridge",
            "gallery"=>"https://www.vectorstock.com/royalty-free-vector/red-fridge-vector-9487610.webp",
        ]
        ]);
    }
}
