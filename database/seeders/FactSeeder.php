<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            'icone' => 'bi bi-emoji-smile',
            'number' => '232',
            'description' => '[Happy Clients] consequuntur quae',
            'created_at' => now(),
        ]);
        DB::table('facts')->insert([
            'icone' => 'bi bi-journal-richtext',
            'number' => '531',
            'description' => '[Projects] adipisci atque cum quia aut',
            'created_at' => now(),
        ]);
        DB::table('facts')->insert([
            'icone' => 'bi bi-headset',
            'number' => '1453',
            'description' => '[Hours Of Support] aut commodi quaerat',
            'created_at' => now(),
        ]);
        DB::table('facts')->insert([
            'icone' => 'bi bi-people',
            'number' => '32',
            'description' => '[Hard Workers] rerum asperiores dolor',
            'created_at' => now(),
        ]);
        //
    }
}
