<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'slag'
    ];

    public function chess()
    {
        return $this->hasMany(Chess::class);
    }

}
