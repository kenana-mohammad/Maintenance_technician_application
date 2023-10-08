<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_pivot extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','category_id','subcategory_id'];


}
