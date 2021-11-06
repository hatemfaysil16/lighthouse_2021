<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Pricing_line extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title','title_two','month','currency','pricing_desc','button'];

    protected $fillable = [
        'title','title_two','pricing','month','currency','pricing_desc','button'
    ];
}