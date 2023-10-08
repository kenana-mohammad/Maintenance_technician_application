<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function subcategory(){
        return $this->hasMany(subcategory::class);
    }
    //many to many
    public function users(){
        return $this->belongsToMany(User::class,table:'services_pivots');
    }
}
