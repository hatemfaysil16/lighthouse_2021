<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Service_logo extends Model
{
    use HasFactory;

    use HasTranslations;

    public $translatable = ['title'];

    protected $fillable = [
        'list',
        'title',
    ];
}
