<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends=[
        'parent',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    //her kategorinin bir tane parent'i var  (one to many tersi)
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }

    //bir kategorinin birden çok alt kategorisi var (one to many)
    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }
}
