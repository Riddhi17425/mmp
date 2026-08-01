<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
       'message','number','created_at',
    ];

    protected $table = 'whatsapp_inquiry';
}