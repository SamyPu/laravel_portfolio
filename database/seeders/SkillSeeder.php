<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'HTML',
            'value' => '100',
        ]);
        DB::table('skills')->insert([
            'name' => 'CSS',
            'value' => '90',
        ]);
        DB::table('skills')->insert([
            'name' => 'JAVASCRIPT',
            'value' => '75',
        ]);
        DB::table('skills')->insert([
            'name' => 'PHP',
            'value' => '80',
        ]);
        DB::table('skills')->insert([
            'name' => 'WORDPRESS/CMS',
            'value' => '90',
        ]);
        DB::table('skills')->insert([
            'name' => 'PHOTOSHOP',
            'value' => '55',
        ]);
        //
    }
}
