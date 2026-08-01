<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'product_name', 'phone', 'message',
    ];

    protected $table = 'product_inquiry';
}
