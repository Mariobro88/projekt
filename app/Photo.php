<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
      'name', 'chess_id','description'
    ];

    public function chess()
    {
        return $this->belongsTo(Chess::class);
    }}
