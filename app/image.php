<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $fillable = [
        'post_id'
    ];
    public function post(){

        return $this->belongsTo(post::class);

    }
}
