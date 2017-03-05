<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chess extends Model
{
    protected $fillable = [
        'price', 'name', 'description', 'rating', 'category_id'
];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
}
