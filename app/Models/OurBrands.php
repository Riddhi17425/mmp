<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurBrands extends Model
{
    use HasFactory;
    protected $table = 'our_brands';
    protected $primarykey = 'id';
}
