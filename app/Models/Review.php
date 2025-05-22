<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
        public function Restaurant() {
        return $this->belongsTo(Restaurant::class);
     }
    public $timestamps = false;

    public $table = 'reviews';

    public $fillable = ['id','restaurant_id','rating','review','signature','reviewDate'];
}
