<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'image' => 'img/profile-img.jpg',
            'profession' => 'UI/UX Designer & Web Developer.',
            'description_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.',
            'list_1' => '[Birthday:] (1 May 1995)',
            'list_2' => '[Website:] (www.example.com)',
            'list_3' => '[Phone:] (+123 456 7890)',
            'list_4' => '[City:] (New York, USA)',
            'list_5' => '[Age:] (30)',
            'list_6' => '[Degree:] (Master)',
            'list_7' => '[PhEmailone:] (email@example.com)',
            'list_8' => '[Freelance:] (Available)',
            'description_2' => 'Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.',
            'created_at' => now(),
        ]);
        //
    }
}
