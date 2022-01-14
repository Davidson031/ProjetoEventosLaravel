<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    //dizendo que "items" é um array e não uma string
    protected $casts = [
            'items' => 'array'

        ];


}
