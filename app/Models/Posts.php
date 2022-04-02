<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table ='posts';

    public function cate(){
        return $this->belongsToMany(Categories::class,
        'cate_prod',
        'post_id',
        'cate_id');
    }

    public function prod(){
        return $this->belongsToMany(Products::class,
        'cate_prod',
        'post_id',
        'prod_id');
    }

}
