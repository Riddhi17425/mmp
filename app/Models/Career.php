<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'careers';

    protected $fillable = [
        'name',
        'email',
        'product_type',
        'phone',
        'message',
        'filename',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;
}
