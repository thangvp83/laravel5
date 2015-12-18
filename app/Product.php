<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'alias', 'price', 'intro', 'content', 'image', 'keywords', 'description', 'user_id', 'cate_id'];
    public $timestamps = false;

    public function cate(){
        return $this->belongsTo('App\Cate');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function pimage(){
        $this->hasMany('App\ProductImages');
    }
}
