<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name','category_id'];


    //Relation &category one to many
    public function Category(){
        return $this->beLongsTo(category::class);
    }
    //many to many
    public function users(){
        return $this->belongsToMany(User::class,table:'services_pivots');
    }
}
