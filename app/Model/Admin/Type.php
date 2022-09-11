<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'type_name', 'type_picture'
    ];
}
