<?php

namespace HossamTarek\NotificationManager\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Channel extends Model
{
    use HasTranslations;

    protected $guarded = [];
    public $translatable = ['name'];
}
