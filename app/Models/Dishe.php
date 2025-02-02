<?php

namespace App\Models;

use Database\Factories\DisheFactory;
use Illuminate\Database\Eloquent\Model;

class Dishe extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    protected static function factory()
    {
        return DisheFactory::new();
    }
}
