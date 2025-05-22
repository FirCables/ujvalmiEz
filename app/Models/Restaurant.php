<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
     public function Reviews() {
        return $this->hasMany(Review::class);
     }
    public $timestamps = false;

        public $table = 'restaurants';

        public $fillable=['name', 'adress', 'seats', 'imageUrl', 'description1', 'description2'];
}
