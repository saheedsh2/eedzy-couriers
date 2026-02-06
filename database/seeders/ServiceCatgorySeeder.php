<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCatgorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                "name" => "SameDayDelivery",
                "slug" => "samedaydelivery",
                "image" => "samedaydelivery.png",
            ],
             [
                "name" => "InternationalDelivery",
                "slug" => "internationaldelivery",
                "image" => "internationaldelivery.png",
            ],
             [
                "name" => "OvernightDelivery",
                "slug" => "overnight",
                "image" => "overnightdelivery.png",
            ],
        ]);
    }
}
