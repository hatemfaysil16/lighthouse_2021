<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class HomeAbout extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title','short_dis','long_dis','pointe','list'];

    protected $fillable = [
        'title','short_dis','long_dis','pointe','list'
    ];
}

