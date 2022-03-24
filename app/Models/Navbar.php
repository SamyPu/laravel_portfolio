<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'image',
        'name',
        'link_name',
        'icon_1',
        'link_icon1',
        'icon2',
        'link_icon2',
        'icon3',
        'link_icon3',
        'icon4',
        'link_icon4',
        'icon5',
        'link_icon5',
        'icon6',
        'name_icon6',
        'icon7',
        'name_icon7',
        'icon8',
        'name_icon8',
        'icon9',
        'name_icon9',
        'icon10',
        'name_icon10',
    ];
     
    protected $table = 'navbars';
}
