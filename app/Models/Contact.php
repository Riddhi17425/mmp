<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'product_type', 'phone', 'message','company_name','city',
    ];

    // Optionally define table name if it differs from default 'contacts'
    protected $table = 'contact';
}
