<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function post(){

        return $this->belongsTo(post::class);

    }

    public function User(){

        return $this->belongsTo(User::class);

    }

    protected $fillable = ['body'];
}
