<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'name' => 'Alex Smith',
            'text' => "I'm ",
            'typed' => 'Mad Ploppeur, Developer, Freelancer, Photographer',
            'bg_image' => '',
        ]);
        //
    }
}
