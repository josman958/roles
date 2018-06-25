<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'name', 'description',
    ];
    public function products(){
        return $this->hasMany('App\Product');
    }
}
