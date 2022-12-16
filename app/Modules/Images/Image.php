<?php

namespace App\Modules\Images;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        "key",
        "base64"
    ];
}
