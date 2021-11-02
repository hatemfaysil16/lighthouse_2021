<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Info extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['address','logo_text'];

    protected $fillable = [
        'address','phone_one','phone_two','email','link_site','logo_text','logo_img'
    ];
}



