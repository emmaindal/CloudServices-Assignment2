<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{
    protected $touches = ['stores'];
    protected $appends = ['reviews', 'stores'];

    public function getReviewsAttribute() {
        return $this->hasMany('App\Review')->get();
    }

    public function getStoresAttribute() {
        return $this->belongsToMany('App\Store')->get();
    }

    public function stores() {
        return $this->belongsToMany('App\Store')->withTimestamps();
    }
    
    public function reviews() {
        return $this->hasMany('App\Review');
    }
}