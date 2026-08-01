<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'product_type', 'phone', 'message','company_name','city','created_at',
    ];

    protected $table = 'header_inquiry';
}
