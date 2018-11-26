<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class post extends Model
{
    public function comments(){

        return $this->hasMany(comment::class);

    }
    public function images(){

        return $this->hasMany(image::class);

    }

    protected $fillable = ['title','body','user_id','image'];

    public function addComment($body){

        $this->comments()->create(compact('body'));

    }

    public function User(){

        return $this->belongsTo(User::class);

    }
    public function scopeFilter($query, $filters){
        if($mouth = $filters['mouth']){

            $query->whereMonth('created_at', Carbon::parse($mouth)->
                mouth);

        }

        if($y = $filters['year']){

            $query->whereYear('created_at', $year);

        }

    }
    public static function archives(){

//      this is for postgres
        return static::selectRaw("date_part('year',created_at) y, date_part('month',created_at) m, count(*) published")->groupBy('y', 'm')->orderbyRaw('min(created_at) desc')->get()->toArray();
//      this is for mysql
//        return static::selectRaw('year(created_at) y, mouthname(created_at) m, count(*) published')->groupBy('y','m')->orderByRaw('min(created_at) desc')->get()->toArray();
    }

}
