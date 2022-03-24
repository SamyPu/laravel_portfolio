<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'image',
        'profession',
        'description_1',
        'list_1',
        'list_2',
        'list_3',
        'list_4',
        'list_5',
        'list_6',
        'list_7',
        'list_8',
        'description_2',
    ];
     
    protected $table = 'abouts';
}
