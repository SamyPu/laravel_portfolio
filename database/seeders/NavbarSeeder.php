<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            'image' => 'img/profile-img.jpg',
            'name' => 'Alex Smith',
            'link_name' => '#',
            'icon_1' => 'bx bxl-twitter',
            'link_icon1' => '#',
            'icon2' => 'bx bxl-facebook',
            'link_icon2' => '#',
            'icon3' => 'bx bxl-instagram',
            'link_icon3' => '#',
            'icon4' => 'bx bxl-skype',
            'link_icon4' => '#',
            'icon5' => 'bx bxl-linkedin',
            'link_icon5' => '#',
            'icon6' => 'bx bx-home',
            'name_icon6' => 'Home',
            'icon7' => 'bx bx-user',
            'name_icon7' => 'About',
            'icon8' => 'bx bx-book-content',
            'name_icon8' => 'Portfolio',
            'icon9' => 'bx bx-envelope',
            'name_icon9' => 'Contact',
            'icon10' => 'bx bx-log-in',
            'name_icon10' => 'Log In',
        ]);
        //
    }
}
